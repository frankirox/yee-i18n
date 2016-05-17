<?php

use yeesoft\db\TranslatedMessagesMigration;

class m160419_081214_i18n_ru_yee_auth extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'ru';
    }

    public function getCategory()
    {
        return 'yee/auth';
    }

    public function getTranslations()
    {
        return [
            'Are you sure you want to delete your profile picture?' => 'Вы действительно хотите удалить изображение профиля?',
            'Are you sure you want to unlink this authorization?' => 'Вы действительно хотите удалить эту авторизацию?',
            'Authentication error occurred.' => 'Ошибка аутентификации.',
            'Authorization' => 'Авторизация',
            'Authorized Services' => 'Авторизованные Сервисы',
            'Captcha' => 'Защита',
            'Change profile picture' => 'Изменить изображение профиля',
            'Check your E-mail for further instructions' => 'Проверьте вашу электронную почту для получения дальнейших инструкций',
            'Check your e-mail {email} for instructions to activate account' => 'Проверьте вашу электронную почту {email} для дальнейших инструкций по активации учетной записи',
            'Click to connect with service' => 'Нажмите, чтобы авторизоваться с сервисом',
            'Click to unlink service' => 'Нажмите, чтобы отсоединиться от сервиса',
            'Confirm E-mail' => 'Подтвердите электронную почту',
            'Confirm' => 'Подтвердить',
            'Could not send confirmation email' => 'Не удалось отправить подтверждение по электронной почте',
            'Current password' => 'Текущий пароль',
            'E-mail confirmation for' => 'Подтверждение адреса электронной почты для',
            'E-mail confirmed' => 'Электронная почта подтверждена',
            'E-mail is invalid' => 'Недействительнач электронная почта',
            'E-mail with activation link has been sent to <b>{email}</b>. This link will expire in {minutes} min.' => 'Письмо со ссылкой активации был отправлен на e-mail <b> {email} </ b>. Эта ссылка будет активна в течение {minutes} мин.',
            'E-mail' => 'E-mail',
            'Forgot password?' => 'Забыли пароль?',
            'Incorrect username or password' => 'Неверное имя пользователя или пароль',
            'Login has been taken' => 'Логин занят',
            'Login' => 'Логин',
            'Logout' => 'Выйти',
            'Non Authorized Services' => 'Неавторизованные Сервисы',
            'Password has been updated' => 'Пароль успешно обновлен',
            'Password recovery' => 'Восстановление пароля',
            'Password reset for' => 'Восстановление пароля для',
            'Password' => 'Пароль',
            'Registration - confirm your e-mail' => 'Регистрация - Подтвердите адрес электронной почты',
            'Registration' => 'Регистрация',
            'Remember me' => 'Запомнить меня',
            'Remove profile picture' => 'Удалить изображение профиля',
            'Repeat password' => 'Повторите пароль',
            'Reset Password' => 'Сбросить пароль',
            'Reset' => 'Сбросить',
            'Save Profile' => 'Сохранить Профиль',
            'Save profile picture' => 'Сохранить изображение профиля',
            'Set Password' => 'Установить Пароль',
            'Set Username' => 'Установить имя пользователя',
            'Signup' => 'Регистрация',
            'This E-mail already exists' => 'Этот e-mail уже используется',
            'Token not found. It may be expired' => 'Ссылка не действительна. Оно может быть истекшая',
            'Token not found. It may be expired. Try reset password once more' => 'Ссылка не действительна. Оно может быть истекшая. Попробуйте восстановить пароль еще раз',
            'Too many attempts' => 'Слишком много попыток',
            'Unable to send message for email provided' => 'Не удалось отправить сообщение на электронную почту',
            'Update Password' => 'Изменить пароль',
            'User Profile' => 'Профиль пользователя',
            "User with the same email as in {client} account already exists but isn't linked to it. Login using email first to link it." => 'Пользователь с такой же электронной почтой как и в аккаунте {client} уже существует. Войдите с помощью электронной почты, и свяжите ваш аккаунт.',
            'Wrong password' => 'Неправильный пароль',
            'You could not login from this IP' => 'Вы не можете войти с этого IP адреса',
        ];
    }
}