<section>
    <h1 class="text-2xl font-bold text-center my-5">Login</h1>
    <div class="my-5 bg-bg shadow rounded max-w-sm mx-auto p-4 md:p-8">
        <div class="flex justify-center">
            <?php echo do_shortcode('[nextend_social_login]'); ?>
        </div>
        <div class="mt-10 mb-6">
            <span class="w-full h-px bg-line-alt block mx-auto mt-4 -mb-[19px]"></span>
            <span class="bg-bg-alt relative rounded-full w-9 h-9 text-sm flex items-center justify-center mx-auto">or</span>
        </div>
        <div class="text-center">
            <a href="/my-account?action=loginwithemail" class="flex justify-center items-center text-sm gap-1">
                <span>Login with Email</span><?= s_icon('chevron-right', 16); ?>
            </a>
        </div>
    </div>
</section>