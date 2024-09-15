<div class="container">
    <h1>User List</h1>
    <?php
    global $wpdb;

    $external_db = new wpdb('wordpress', 'wordpress1!', 'wordpress', 'localhost');
    // $external_db = new wpdb('wordpress', 'wordpress1!', 'wp101plugin', 'localhost');

    // 쿼리 실행 예시
    $results = $external_db->get_results("SELECT user_email, display_name, user_registered FROM wp_users");

    // // wp_users 테이블에서 user_email과 display_name을 선택
    // $results = $wpdb->get_results("
    //     SELECT user_email, display_name
    //     FROM {$wpdb->users}
    // ");

    if ( !empty($results) ) {
        echo '<ul>';
        foreach ( $results as $user ) {
            echo '<li>';
            echo 'Email: ' . esc_html($user->user_email) . '<br>';
            echo 'Display Name: ' . esc_html($user->display_name) . '<br>';
            echo 'Registered At: ' . esc_html($user->user_registered);
            echo '</li>';
        }
        echo '</ul>';
    } else {
        echo 'No users found.';
    }
    ?>
</div>
