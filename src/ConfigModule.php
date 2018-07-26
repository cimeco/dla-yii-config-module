<?php

namespace quoma\modules\config;

use quoma\core\menu\Menu;
use quoma\core\module\QuomaModule;
use Yii;

class ConfigModule extends QuomaModule
{
    public $controllerNamespace = 'quoma\modules\config\controllers';

    public function init()
    {
        parent::init();
        
        $this->registerTranslations();
    }

    /**
     * @return array
     */
    public function getMenu(Menu $menu)
    {
        $items = [];
        $items[] = (new Menu(Menu::MENU_TYPE_ITEM))
            ->setName('config')
            ->setLabel('<li class="dropdown-header">'.self::t('Configuration'). '</li>')
        ;

        $categories = \quoma\modules\config\models\Category::find()->where(['status' => 'enabled'])->all();
        foreach($categories as $category){
            if(!$category->superadmin || Yii::$app->user->isSuperadmin){
                $items[] = (new Menu(Menu::MENU_TYPE_ITEM))->setLabel($category->name)->setUrl(['/config/config', 'category' => $category->category_id]);
            }
        }
       if (Yii::$app->user->isSuperadmin) {
            $items[] = new Menu(Menu::MENU_TYPE_DIVIDER);
            $items[] = (new Menu(Menu::MENU_TYPE_ITEM))->setLabel(self::t('Config Categories'))->setUrl(['/config/category']);
            $items[] = (new Menu(Menu::MENU_TYPE_ITEM))->setLabel(self::t('Config Items'))->setUrl(['/config/item']);
        }
        foreach ($items as $item) {
            $menu->addItem($item);
        }
        return $menu;
    }


    public function getDependencies()
    {
        return [];
    }
}