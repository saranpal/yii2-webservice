<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * SearchForm is the model behind the contact form.
 */
class SearchForm extends Model
{
    public $keyword;
    public $location;
    public $pagination;
    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['keyword'], 'required'],
           
        ];
    }	
}
