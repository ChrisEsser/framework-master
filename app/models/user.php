<?php


/**
 * Example user class
 *
 * set table name on protected static $_tableName
 * set primary key on protected static $_primaryKey
 * setup fields on protected static $_tableFields array
 * define relationships on protected static function defineRelations()
 * setup public variables
 *
 * Class User
 */
class User extends BaseModel
{

    protected static $_tableName = 'users';
    protected static $_primaryKey = 'id';

    protected static $_tableFields = [
        'username',
        'password',
    ];

    protected static function defineRelations()
    {
//        self::addRelationOneToOne('id', 'Api', 'user_id');
    }

    public $id;
    public $username;
    public $password;

}