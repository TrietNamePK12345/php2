<?php
/**
 | Abstract Class Model look like cơ sở nhằm create các model
 | có thể được sử dụng để xác thực và xử lý dlieu
 * */
namespace App\core;
abstract class Model
{
//    tạo các hằng số -> xác định các qui tắc xác thực.
    public const RULE_REQUIRED = 'required';
    public const RULE_EMAIL = 'email';
    public const RULE_MIN = 'min';
    public const RULE_MAX = 'max';
    public const RULE_MATCH = 'match';

/**
| loadData nhận 1 mảng kết hợp $data làm tham số và
|và điền giá trị tương ứng vào các thuộc tính của model với
| các giá trị cung cấp.
| Nó lặp qua mảng, check property có tồn tại trong model ko và gán giá trị
 */
    public function loadData($data)             // $data là 1 mảng kết hợp chứa dl cần gán cho các thuộc tính.
    {
        foreach ($data as $key => $value) {     // Duyệt mảng $data, $key là tên thuộc tính, $value là giá trị tương ứng cần được gán.
            if (property_exists($this, $key)) { // Kiểm tra thuộc tính có tồn tại khoog | trả về true if thuộc tính $key tồn tại trong đối tượng $this
                $this->{$key} = $value;         // Gán gt $value cho tt $key trong đối tượng hiện tại ($this).
                                                // Dấu {} được sử dụng để truy cập thuộc tính có tên đc động( nằm trong $key )
            }
        }
    }

    abstract public function rules(): array; // các lớp con của lớp này cần triển khai phương thức và trả về 1 mảng định nghĩa


    public array $errors = []; // lưu trữ các thông báo lỗi sau khi check dl

    //
    public function validate()
    {
        //
        foreach ($this->rules() as $attribute => $rules) { // lặp qua mảng kết quả của rules để lấy ds các quy tắc xác thực cho từng tt của đt
            $value = $this->{$attribute}; // gán giá trị của thuộc tính hiện tại vào biến $value
            foreach ($rules as $rule) {
                $ruleName = $rule;        // tên của quy xác thực. Nếu quy tắc đn dưới dạng mảng, sử dụng phần tử đầu tiên của mảng làm tên quy tắc
                if (!is_string($ruleName)) {
                    $ruleName = $rule[0];
                }

                if ($ruleName === self::RULE_REQUIRED && !$value) {
                    $this->addError($attribute, self::RULE_REQUIRED);
                }

                if ($ruleName === self::RULE_EMAIL && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    $this->addError($attribute, self::RULE_EMAIL);
                }

                if ($ruleName === self::RULE_MIN && strlen($value) < $rule['min']) {
                    $this->addError($attribute, self::RULE_MIN, $rule);
                }

                if ($ruleName === self::RULE_MAX && strlen($value) > $rule['max']) {
                    $this->addError($attribute, self::RULE_MAX, $rule);
                }

                if ($ruleName === self::RULE_MATCH && $value !== $this->{$rules['match']}) {
                    $this->addError($attribute, self::RULE_MAX, $rule);
                }
            }
        }
        return empty($this->errors); // trả về true nếu ko có lỗi, ngược lại.
    }

    //pt addError => thông báo lỗi vào mảng errors của đối tượng dựa trên quy tắc xác thực 0 thỏa mãn
    public function addError(string $attribute, string $rule, $params = [])
    {
        $message = $this->errorMessages()[$rule] ?? ''; // gán giá trị của phần tử có key là $rule trog mảng đc trả về bởi pt $errorMessage vào biến $message
        foreach ($params as $key => $value) {
            $message = str_replace("{{$key}}", $value, $message); // thực hiện vòng lặp để thay thế các gt trong $message = giá trị tương ứng với tham số
    }
        $this->errors[$attribute][] = $message; // thông báo lỗi đã được tạo và được lưu trữ các thông báo lỗi cho từng thuộc tính đối tượng
    }

    public function errorMessages() {
        return [
            self::RULE_REQUIRED => 'Không được để trống',
            self::RULE_EMAIL => 'Email sai định dạng!',
            self::RULE_MIN => "Độ dài trong trường này phải {min} kí tự trở lên!",
            self::RULE_MAX => "Độ dài trong trường này phải {max} từ trở xuống!",
            self::RULE_MATCH => "Trường này bắt buộc phải chính xác với {match}"
        ];
    }

//    check có thống báo lỗi nào đó cho thuộc tính cụ thể hay không
    public function hasError($attribute)
    {
        return $this->errors[$attribute] ?? false;
    }

    public function getFirstError($attribute) // Trả về thông báo lỗi đầu tiên(nếu có)
    {
        return $this->errors[$attribute][0] ?? false;
    }
}