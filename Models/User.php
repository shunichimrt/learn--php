<?php //phpcs:disable PSR1.Files.SideEffects.FoundWithSymbols
require_once(ROOT_PATH .'/Models/Db.php');

// phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
class User extends Db
{
    public function __construct($dbh = null)
    {
        parent::__construct($dbh);
    }

    public function createUsers($users)
    {
        $sql = 'INSERT INTO users (name, email, password, town_id, role) VALUES (?, ?, ?, ?, ?)';
        $arr = [];
        $arr[] = $users['name'];
        $arr[] = $users['email'];
        $arr[] = password_hash($users['password'], PASSWORD_DEFAULT);
        $arr[] = $users['town_id'];
        $arr[] = $users['role'];
        $sth = $this->dbh->prepare($sql);
        $sth->execute($arr);

        $sq = 'SELECT * FROM users WHERE email = ?';
        $st = $this->dbh->prepare($sq);
        $email = $users['email'];
        $st->execute(array($email));
        $user = $st->fetch();
        return $user;
    }

    public function loginUsers($email)
    {
        $sql = 'SELECT * FROM users WHERE email = ?';
        $sth = $this->dbh->prepare($sql);
        $sth->execute(array($email));
        $user = $sth->fetch();
        return $user;
    }

    public function changePasswords($email, $password)
    {
        $sql = 'UPDATE users SET password = ? WHERE email = ?';
        $arr = [];
        $arr[] = password_hash($password, PASSWORD_DEFAULT);
        $arr[] = $email;
        $sth = $this->dbh->prepare($sql);
        $sth->execute($arr);
        return $sth;
    }
}
