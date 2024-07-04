<?php defined('ABSPATH') || exit; ?>
<section>
    <h1 class="text-2xl font-bold text-center my-5">Login with Email</h1>
    <div class="my-5 bg-bg shadow rounded max-w-sm mx-auto p-4 md:p-8">
        <form name="loginform" id="loginform" action="/wp-login.php" method="post" class="grid gap-3 rounded-md *:grid *:gap-2">
            <p class="login-username">
                <label for="user_login">Email</label>
                <input type="text" name="log" id="user_login" autocomplete="username" class="input" value="" size="20">
            </p>
            <p class="login-password">
                <label for="user_pass">Password</label>
                <input type="password" name="pwd" id="user_pass" autocomplete="current-password" spellcheck="false" class="input" value="" size="20">
            </p>
            <p class="login-remember">
                <label class="cursor-pointer">
                    <input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember
                </label>
            </p>
            <p class="login-submit">
                <input type="submit" name="wp-submit" id="wp-submit" value="Login" class="!py-2.5" />
                <input type="hidden" name="redirect_to" value="/my-account" />
            </p>
        </form>
    </div>
    <a href="/my-account" class="flex justify-center items-center text-sm gap-1">
        <?= s_icon('chevron-left', 16); ?><span>Login with Social</span>
    </a>
</section>