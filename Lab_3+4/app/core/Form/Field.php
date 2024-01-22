<?php

namespace App\core\Form;
use App\core\Model;

class Field
{
    public const TYPE_TEXT = 'text';
    public const TYPE_PASS = 'password';
    public const TYPE_EMAIL = 'email';

    public const LABEL_NAME = 'Họ và Tên';
    public const LABEL_PASS = 'Mật Khẩu';
    public const LABEL_EMAIL = 'Email';

    public string $type;
    public string $label;
    public Model $model;
    public string $attribute;

    /**
     * @param Model $model
     * @param string $attribute
     */
    public function __construct(Model $model, string $attribute)
    {
        $this->type = self::TYPE_TEXT;
        $this->label = self::LABEL_NAME;
        $this->model = $model;
        $this->attribute = $attribute;
    }

    public function __toString()
    {
        return sprintf('
            <div class="form-floating theme-form-floating">
                 <input type="%s" name="%s" value="%s" class="form-control %s" id="fullname" placeholder="Full Name" >
                 <label>%s</label>
                 <div class="invalid-feedback">%s</div>
            </div>
        ',
            $this->type,
            $this->attribute,
            $this->model->{$this->attribute},
            $this->model->hasError($this->attribute) ? 'is-invalid' : '',
            $this->label,
            $this->model->getFirstError($this->attribute)
        );
    }

    public function passwordField()
    {
        $this->type = self::TYPE_PASS;
        return $this;
    }

    public function emailField()
    {
        $this->type = self::TYPE_EMAIL;
        return $this;
    }

    public function emailLabel()
    {
        $this->label = self::LABEL_EMAIL;
        return $this;
    }

    public function passLabel()
    {
        $this->label = self::LABEL_PASS;
        return $this;
    }




}