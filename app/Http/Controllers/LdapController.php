<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LdapController extends Controller {

    // Accion que devuelve vista

    public function index() {

        return 'LDAP CONTROLADOR ENVIADO!!!';
    }

    public function ldapLogin(Request $request) {
        $data = $request;

        $uname = 'eurecat\\' . $data['unm'];
        echo $uname;
        $pwd = $data['psw'];
        $host = "ldap://local.eurecat.org";
        $puerto = 389;

        // conexión al servidor LDAP

        $ldapconn = ldap_connect($host, $puerto) or die("No ha sido posible conectarse al servidor");

        // realizando la autenticación login

        if ($login = ldap_bind($ldapconn, $uname, $pwd) != true) {
            return 'BASUCO';
        }
        
        return 'eyeyyeyeaa';
    }

}
