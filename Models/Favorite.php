<?php //phpcs:disable PSR1.Files.SideEffects.FoundWithSymbols
require_once(ROOT_PATH .'/Models/Db.php');

// phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
class Favorite extends Db
{
    public function __construct($dbh = null)
    {
        parent::__construct($dbh);
    }

    public function userGoods($u_id):Array
    {
        $sql = 'SELECT blog.id AS b_id, created_at, title
                FROM blog
                LEFT JOIN favorite ON favorite.blog_id = blog.id
                WHERE del_flg = 0 && favorite.users_id = ?
                ORDER BY created_at DESC';
        $sth = $this->dbh->prepare($sql);
        $sth->execute(array($u_id));
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function isGoods($u_id, $b_id)
    {
        $sql = 'SELECT * FROM favorite WHERE users_id = ? AND blog_id = ?';
        $sth = $this->dbh->prepare($sql);
        $arr = [];
        $arr[] = $u_id;
        $arr[] = $b_id;
        $sth->execute($arr);
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function checkGood($b_id, $u_id)
    {
        $sql = 'SELECT * FROM favorite WHERE blog_id = ? AND users_id = ?';
        $sth = $this->dbh->prepare($sql);
        $arr = [];
        $arr[] = $b_id;
        $arr[] = $u_id;
        $sth->execute($arr);
        $result = $sth->rowCount();
        return $result;
    }

    public function delGood($b_id, $u_id)
    {
        $sql = 'DELETE FROM favorite WHERE blog_id = ? AND users_id = ?';
        $sth = $this->dbh->prepare($sql);
        $arr = [];
        $arr[] = $b_id;
        $arr[] = $u_id;
        $sth->execute($arr);
        return $sth;
    }

    public function inGood($b_id, $u_id)
    {
        $sql = 'INSERT INTO favorite (blog_id, users_id) VALUES (?, ?)';
        $sth = $this->dbh->prepare($sql);
        $arr = [];
        $arr[] = $b_id;
        $arr[] = $u_id;
        $sth->execute($arr);
        return $sth;
    }
}
