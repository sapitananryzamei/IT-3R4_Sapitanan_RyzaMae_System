<?php

    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use App\Traits\ApiResponser;
    use App\User;
    use DB;
    Class UserController extends Controller {
        use ApiResponser;
        private $request;

        public function __construct(Request $request){
        $this->request = $request;
        }

        public function loginpage(){
            return view('login');
        }

        public function validateUser(){
            
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = app('db')->select("SELECT * FROM users WHERE username='$username' and password='$password'");

            if(empty($user)){
                return 'No account registered or Invalid login credentials.';
            }else{
                return redirect()->route('site');
            }
            
        }
        public function sitepage(){
            $id = app('db')->select("SELECT id FROM users");
            $username = app('db')->select("SELECT username FROM users");
            $password = app('db')->select("SELECT password FROM users");

            $data = [
                'id'=>$id,
                'username'=>$username,
                'password'=>$password
            ];
            return view('site')->with($data);
        }
        public function CreateUser(Request $request){

            $this->validate($request, [
                'username' => 'required|max:50',
                'password' => 'required|max:50'
            ]);

            $users = app('db')->select("SELECT * FROM users");
            

            if(count($users)>0){
                $idcount = DB::table('users')->orderBy('id', 'DESC')->first();
                $idcount = $idcount->id;
                $users = new User;
                $users->id=($idcount+1);
                $users->password = $request->input('password');
                $users->username = $request->input('username');
                if ($users->save()) {
                    return redirect()->route('site');
                } else {
                }
            }else{
                $users = new User;
                $users->id = (count($users)+ 1);
                $users->password = $request->input('password');
                $users->username = $request->input('username');
                if ($users->save()) {
                    return redirect()->route('site');
                } else {
                }
            }
           
        }

        public function createpage(){
            return view('create');
        }

        public function editpage(){
            $id = app('db')->select("SELECT id FROM users");
            $username = app('db')->select("SELECT username FROM users");
            $password = app('db')->select("SELECT password FROM users");

            $data = [
                'id' => $id,
                'username' => $username,
                'password' => $password
            ];
            return view('edit')->with($data);
        }

        public function update(){
            $id = $_POST['idSearch'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            app('db')->table('users')->where('id', $id)->update(['username' => $username, 'password' => $password]);
            return redirect()->route('site');
        }

        public function delete(){
            $id = $_POST['delete_id'];
            $user = User::find($id);
            $user->delete();
            return redirect()->route('site');
        }

    }
?>