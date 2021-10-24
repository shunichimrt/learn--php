<?php //phpcs:disable PSR1.Files.SideEffects.FoundWithSymbols
//phpcs:disable Generic.Files.LineLength.TooLong
require_once(ROOT_PATH .'/Models/Db.php');

// phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
class Blog extends Db
{
    public function __construct($dbh = null)
    {
        parent::__construct($dbh);
    }

    public function findAll($name):Array
    {
        $sql = 'SELECT blog.id AS b_id, created_at, title,town.id AS t_id
                FROM blog
                LEFT JOIN town ON blog.town_id = town.id
                WHERE del_flg = 0 && town.name = ?
                ORDER BY created_at DESC';
        $sth = $this->dbh->prepare($sql);
        $sth->execute(array($name));
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function editBlogs($blog)
    {
        $sql = "UPDATE blog
                SET title = :title, content = :content
                WHERE id = ".$blog['id'];
        $sth = $this->dbh->prepare($sql);
        $sth->bindParam(':title', $blog['title'], PDO::PARAM_STR);
        $sth->bindParam(':content', $blog['content'], PDO::PARAM_STR);
        $sth->execute();
        return $sth;
    }

    public function delFlg($id)
    {
        $sql = 'UPDATE blog
                SET del_flg = 1
                WHERE id = ?';
        $sth = $this->dbh->prepare($sql);
        $sth->execute(array($id));
        return $sth;
    }

    public function createBlogs($blog)
    {
        $sql = 'INSERT INTO blog (users_id, town_id, title, content) VALUES (?, ?, ?, ?)';
        $arr = [];
        $arr[] = $blog['users_id'];
        $arr[] = $blog['town_id'];
        $arr[] = $blog['title'];
        $arr[] = $blog['content'];
        $sth = $this->dbh->prepare($sql);
        $sth->execute($arr);
        return $sth;
    }

    public function biasFindAll($login_id):Array
    {
        $sql = 'SELECT blog.id AS b_id, created_at, title
                FROM blog
                LEFT JOIN users ON blog.users_id = users.id
                WHERE del_flg = 0 && users.id = ?
                ORDER BY created_at DESC';
        $sth = $this->dbh->prepare($sql);
        $sth->execute(array($login_id));
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function findById($id = 0):Array
    {
        $sql = 'SELECT blog.id AS b_id, users.name AS u_name, town.name AS t_name, title, content, created_at
                FROM blog
                LEFT JOIN town ON blog.town_id = town.id
                LEFT JOIN users ON blog.users_id = users.id
                WHERE blog.id ='.$id;
        $sth = $this->dbh->prepare($sql);
        $sth->execute();
        $result = $sth->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}
