<?php

namespace app\models;

use yii\rbac\Role;

class User extends \yii\base\BaseObject implements \yii\web\IdentityInterface
{
    public $id;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;
    public $role;

    private static $users = [
        '100' => [
            'id' => '100',
            'username' => 'karel',
            'password' => 'kistk',
            'authKey' => 'karel-key',
            'accessToken' => 'karel-token',
            'role' => 'admin',
        ],
        '101' => [
            'id' => '101',
            'username' => 'katleen',
            'password' => 'kath',
            'authKey' => 'katleen-key',
            'accessToken' => 'katleen-token',
            'role' => 'medewerker',
        ],
        '102' => [
            'id' => '102',
            'username' => 'johan',
            'password' => 'jpop',
            'authKey' => 'johan-key',
            'accessToken' => 'johan-token',
            'role' => 'inname',
        ],
        '103' => [
            'id' => '103',
            'username' => 'dirk',
            'password' => 'dirkhaan',
            'authKey' => 'dirk-key',
            'accessToken' => 'dirk-token',
            'role' => 'uitgifte',
        ],
        '104' => [
            'id' => '104',
            'username' => 'margeet',
            'password' => 'huisbouw',
            'authKey' => 'margeet-key',
            'accessToken' => 'margeet-token',
            'role' => 'verwerking',
        ],
        '105' => [
            'id' => '105',
            'username' => 'james',
            'password' => 'puurman',
            'authKey' => 'james-key',
            'accessToken' => 'james-token',
            'role' => 'applicatieBeheerder',
        ],
    ];


    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        foreach (self::$users as $user) {
            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
