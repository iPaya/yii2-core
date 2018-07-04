<?php


namespace iPaya\Core\Http;


use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class Controller extends \yii\web\Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $accessRules = $this->accessRules();
        if (is_array($accessRules)) {
            $behaviors['accessControl'] = [
                'class' => AccessControl::class,
                'rules' => $accessRules,
            ];
        }
        $verbs = $this->verbs();
        if (is_array($verbs)) {
            $behaviors['verbs'] = [
                'class' => VerbFilter::class,
                'actions' => $verbs,
            ];
        }
        return $behaviors;
    }

    /**
     * @return array|false
     */
    public function accessRules()
    {
        return false;
    }

    /**
     * @return array
     */
    public function verbs()
    {
        return [];
    }
}
