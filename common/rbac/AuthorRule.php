<?php
/**
 * User: Николай
 * Date: 3/28/2018
 * Time: 12:53
 */

namespace common\rbac;

class AuthorRule extends \yii\rbac\Rule
{
  public $name = 'isAuthor';
  
  /**
   * @param string|integer $user ID пользователя.
   * @param Item $item роль или разрешение с которым это правило ассоциировано
   * @param array $params параметры, переданные в ManagerInterface::checkAccess(), например при вызове проверки
   * @return boolean a value indicating whether the rule permits the role or permission it is associated with.
   */
  public function execute($user, $item, $params)
  {
    return isset($params['news']) ? $params['news']->createdBy == $user : false;
  }
}