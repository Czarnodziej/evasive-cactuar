<?php namespace App\Controllers\Admin;

use BaseController,
    Input,
    Redirect,
    Sentry,
    View;

class AuthController extends BaseController {

    public function getLogin()
    {
        return View::make('admin.auth.login');
    }

    public function postLogin()
    {
        $credentials = array(
            'email' => Input::get('email'),
            'password' => Input::get('password')
        );

        try
        {
            $user = Sentry::authenticate($credentials, false);

            if ($user)
            {
                return Redirect::route('admin.articles.index');
            }
        } catch (\Cartalyst\Sentry\Users\LoginRequiredException $e)
        {
            $error = 'Adres e-mail jest wymagany.';
        } catch (\Cartalyst\Sentry\Users\PasswordRequiredException $e)
        {
            $error = 'Hasło jest wymagane.';
        } catch (\Cartalyst\Sentry\Users\WrongPasswordException $e)
        {
            $error = 'Hasło jest nieprawidłowe, spróbuj ponownie.';
        } catch (\Cartalyst\Sentry\Users\UserNotFoundException $e)
        {
            $error = 'Użytkownik nie został odnaleziony.';
        } catch (\Cartalyst\Sentry\Users\UserNotActivatedException $e)
        {
            $error = 'Użytkownik nie został aktywowany.';
        } catch (\Cartalyst\Sentry\Throttling\UserSuspendedException $e)
        {
            $error = 'Użytkownik jest zawieszony.';
        } catch (\Cartalyst\Sentry\Throttling\UserBannedException $e)
        {
            $error = 'Użytkownik jest zbanowany.';
        } catch (\Exception $e)
        {
            $error = $e->getMessage();
        }

        return Redirect::route('admin.login')->withErrors(array('login' => $error));
    }

    public function getLogout()
    {
        Sentry::logout();

        return Redirect::route('admin.login');
    }

}
