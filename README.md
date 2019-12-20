# Asterios-Network-Php-SDK
Asterios Network Php SDK

Asterios Network Php SDK - a Tool for interaction with Asterios.ws 
Thanks to this tool you can get profile information and see your bookmarks

The list of methods you will find below

To connect you need to throw the files in the root of the site or in a folder and to the main php file add include ' asterios.sdk.php';


Asterios Network Php SDK - Инструмент взаимодействия с сервисами Asterios.ws 
Благодаря этому инструменту вы можете получить информацию о профиле и посмотреть свои закладки

Список методов вы найдете ниже

Для подключения вам надо закинуть файлы в корень сайта или в папку и к главному php файлу добавить include 'asterios.sdk.php';



    $favorites_lastItemId 
    $favorites_imgUrl
    $favorites_Id 
    $favorites_Date 
    $favorites_FromUserId
    $favorites_TimeAgo 
    $favorites_Post 
    $fullname 
    $normalPhotoUrl
    $postsCount
    $likesCount 
    $videosCount 
    $giftsCount
    $friendsCount 
    $location 
    $status 
    $username 
    $birday 
    $day
    $month 
    $year 
    $id


For html output, you may need <?php echo $(method name)?>
Example < ?php echo $status ? > (displays status of the user )

Для вывода в html может понадобится <?php echo $(название метода) ?>
Пример < ?php echo $status ? > (выводит статус пользователя )
