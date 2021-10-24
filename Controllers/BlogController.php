<?php //phpcs:disable PSR1.Files.SideEffects.FoundWithSymbols
require_once(ROOT_PATH .'/Models/User.php');
require_once(ROOT_PATH .'/Models/Town.php');
require_once(ROOT_PATH .'/Models/Blog.php');
require_once(ROOT_PATH .'/Models/Favorite.php');

// phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
class BlogController
{
    private $request;
    private $User;
    private $Town;
    private $Blog;
    private $Favorite;

    public function __construct()
    {
        $this -> request['get'] = $_GET;
        $this -> request['post'] = $_POST;
        $this->User = new User();
        $this->Town = new Town();
        $this->Blog = new Blog();
        $this->Favorite = new Favorite();
    }

    public function userGood($u_id)
    {
        $good = $this->Favorite->userGoods($u_id);
        if (!$good) {
            return false;
        }
        $params = [
           'good' => $good,
        ];
        return $params;
    }

    public function isGood($u_id, $p_id)
    {
        $result = $this->Favorite->isGoods($u_id, $p_id);
        return $result;
    }

    public function index($name)
    {
        $blogs = $this->Blog->findAll($name);
        if (!$blogs) {
            return false;
        }
        $params = [
           'blogs' => $blogs,
        ];
        return $params;
    }

    public function townId($name)
    {
        $result = $this->Town->townIds($name);
        return $result;
    }

    public function delete($id)
    {
        $result = $this->Blog->delFlg($id);
        return $result;
    }

    public function editBlog($blog)
    {
        $result = $this -> Blog -> editBlogs($blog);
        return $result;
    }

    public function view($id)
    {
        if (empty($id)) {
            echo "指定のパラメータが不正です。";
            exit;
        }
        $blog = $this -> Blog -> findById($id);
        $params = [
           'blog' => $blog
        ];
        return $params;
    }

    public function biasIndex($login_id)
    {
        $blogs = $this->Blog->biasFindAll($login_id);
        if (!$blogs) {
            return false;
        }
        $params = [
           'blogs' => $blogs,
        ];
        return $params;
    }

    public function createBlog($blog)
    {
        $result = $this->Blog->createBlogs($blog);
        return $result;
    }

    public function town()
    {
        $town = $this->Town->findAll();
        $params = [
        'town' => $town,
        ];
        return $params;
    }

    public function createUser($data)
    {
        $result = $this->User->createUsers($data);
        return $result;
    }

    public function loginUser($email, $password)
    {
        $result = false;
        $user = $this->User->loginUsers($email);
        if (!$user) {
            return $result;
        } else {
            if ($user['email'] == $email) {
                if (password_verify($password, $user['password'])) {
                    return $user;
                } else {
                    return $result;
                }
            } else {
                return $result;
            }
        }
    }

    public function changePassword($email, $password)
    {
        $result = false;
        $change = $this->User->changePasswords($email, $password);
        if ($change = false) {
            return $result;
        } else {
            $result = true;
            return $result;
        }
    }
}
