<?php namespace Bantenprov\RasioPusPoltu\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\RasioPusPoltu\Facades\RasioPusPoltu;
use Bantenprov\RasioPusPoltu\Models\RasioPusPoltuModel;

/**
 * The RasioPusPoltuController class.
 *
 * @package Bantenprov\RasioPusPoltu
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RasioPusPoltuController extends Controller
{
    public function demo()
    {
        return RasioPusPoltu::welcome();
    }
}
