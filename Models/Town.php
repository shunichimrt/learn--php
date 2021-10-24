<?php //phpcs:disable PSR1.Files.SideEffects.FoundWithSymbols
require_once(ROOT_PATH .'/Models/Db.php');

// phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
class Town extends Db
{
    public function __construct($dbh = null)
    {
        parent::__construct($dbh);
    }

    public function findAll():Array
    {
        $sql = 'SELECT name FROM town';
        $sth = $this->dbh->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function townIds($name)
    {
        $sql = 'SELECT id
                FROM town
                WHERE town.name = ?';
        $sth = $this->dbh->prepare($sql);
        $sth->execute(array($name));
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
