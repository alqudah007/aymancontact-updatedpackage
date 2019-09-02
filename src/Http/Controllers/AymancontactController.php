<?php

# we need to add the following to the package to make controller works fine
namespace Edumepro\Aymancontact\Http\Controllers;

use App\Http\Controllers\Controller;
# To Use the Model
use Edumepro\Aymancontact\mail\aymancontactMail;
use Edumepro\Aymancontact\models\Aymancontact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class AymancontactController extends Controller
{
    public function __construct()
    {
        //dump('AymancontactController Constructor called');
    }

    public function index()
    {
        //dump('AymancontactController INDEX');

        $allmessages = Aymancontact::all();

        if ($allmessages->count() > 0) {
            return view('Aymancontact::index', ['allmessages' => $allmessages]);
        } else {
            return "No records";
        }
        //return view('Aymancontact::index');
    }

    public function create()
    {
        # return the form for create .
        return view('Aymancontact::create'); # name of package without Provide name
    }


    public function store(Request $request)
    {
        // return $request->all();

        # post to this from form
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'message' => 'required',
        ]);
        //dd(config('app.timezone'));
        //dump(config('aymancontactconfig.send_email_to_var'));
        //dd(config('aymancontactconfig.send_email_to_var'));


        Aymancontact::create($request->all());


        # when use config we need to add the config file name
        mail::to(config('aymancontactconfig.send_email_to_var'))->send(new aymancontactMail($request->all()));

        return response()->redirectToRoute('aymancontact.index');
    }





    public function address()
    {
        # issues --------------------------------------------------------------------------------------------------------------------------------
        # 1 - real ip (client ip) vs load balancer Ip Vs Proxy server Ip . (your server may run on loadbalncer so you will get the load blance ip)
        // https://stackoverflow.com/questions/33268683/how-to-get-client-ip-address-in-laravel-5
        # 2 - using serialize date ( un-save php documentation ) .
        # 3-  you can use JS script ! locally - remotely .


        dump(request()->ip()); // "127.0.0.1"
        dump(\Request::getClientIp(true)); // "127.0.0.1"



        # THE BEST AND ACCURATE WAY A
        # ways to get user ips
        $clientIP = \Request::getClientIp(true); // this may cause issues since it will consider all users as same ip !  Stakoverflow suggestion , READ MORE about # Configuring Trusted Proxies

        $otherIp = request()->ip();
        $dummyip = '51.253.62.96';

        $jsona = file_get_contents("http://www.geoplugin.net/php.gp/?ip=$dummyip"); // This is ok but will be serialized !! "a:24:{s:17:"geoplugin_request";s:12:"51.253.62.96";s:16:"geoplugin_status";i:200;s:15:"geoplugin_delay";s:3:"1ms";s:16:"geoplugin_credit";s:145:"Some of the ret ▶"

        $jsonb = json_decode($jsona, true);
        dd($jsona);



        #dd(\Opis\Closure\unserialize(file_get_contents("http://www.geoplugin.net/php.gp/?ip=$dummyip")));//OK 100%  return Array data type
        #$dataType= getType($temp);  // Array data type
        return 0;//  this will be JSON format !



        #$user_ip = $_SERVER['REMOTE_ADDR'];#getenv('REMOTE_ADDR');// this return json
        $user_ip = $_SERVER['REMOTE_ADDR'];
        $geo = json_decode(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
        $country = $geo["geoplugin_countryName"];
        $city = $geo["geoplugin_city"];
        //$fulladdress = $user_ip . "####" . $geo . "###" . $country . "###" . $city;
        dd($geo);

        return 0;

    }


    public function address2()
    {
        #-------- WAY NO 2 with risky serialize --------------------------------
        # We need to care about proxy server ip as well - add the trust proxy ip .
        # THE OUTPUT IS GREAT of this method
        #  "ip": "51.253.62.96",\n
        #  "city": "Dammam",\n
        #  "region": "Eastern Province",\n
        #  "country": "SA",\n
        #  "loc": "26.4344,50.1033",\n
        #  "timezone": "Asia/Riyadh",\n
        #  "readme": "https://ipinfo.io/missingauth"\n


        function get_client_ip()
        {
            $ipaddress = '';
            if (isset($_SERVER['HTTP_CLIENT_IP'])) {
                $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
            } else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
            } else if (isset($_SERVER['HTTP_X_FORWARDED'])) {
                $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
            } else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
                $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
            } else if (isset($_SERVER['HTTP_FORWARDED'])) {
                $ipaddress = $_SERVER['HTTP_FORWARDED'];
            } else if (isset($_SERVER['REMOTE_ADDR'])) {
                $ipaddress = $_SERVER['REMOTE_ADDR'];
            } else {
                $ipaddress = 'UNKNOWN';
            }

            return $ipaddress;
        }

        #$PublicIP = get_client_ip();
        $PublicIP = '51.253.62.96';
        $jsona = file_get_contents("http://ipinfo.io/$PublicIP/geo");
        # dd(file_get_contents('http://api.hostip.info/get_html.php?ip=' . $PublicIP));

        $jsonb = json_decode($jsona, true);
        //$jsonb['region']
        return $jsonb;




    }

    public function address3(){

        $client = new \GuzzleHttp\Client();
        $PublicIP = '51.253.62.96';
        $response = $client->post('http://www.geoplugin.net/json.gp?ip='.$PublicIP, [
            'form_params' => [
                /*'grant_type' => 'password',
                'client_id' => '2', // from oauth_client table in DB
                'client_secret' => 'TjXDMwxFn8e6AxIY4cYNhVjgBNmfAgy7EHEQD6TQ',// from oauth_client table in DB
                'username' => $request->email, // NOTICE IT IS USERNAME FOR GUZZLE
                'password' => $request->password,
                'scope' => '',*/
            ],
        ]);


        //dd($response);
        $fulldata= json_decode((string)$response->getBody(), true);
        dd($fulldata);
        //dd($fulldata['region']."-".$fulldata['city']);

    }



}
