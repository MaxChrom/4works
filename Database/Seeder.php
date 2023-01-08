<?php

include '../classes/Product-list.php';
echo $_COOKIE['id'];
$products = [
    [
        'name' => 'Volvo',
        'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.',
        'price' => mt_rand(10000, 100000),
        'user_id' => $_COOKIE['id'],
    ],
    [
        'name' => 'Ferrari',
        'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.',
        'price' => mt_rand(10000, 100000),
        'user_id' => $_COOKIE['id'],
    ],
    [
        'name' => 'Ford',
        'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.',
        'price' => mt_rand(10000, 100000),
        'user_id' => $_COOKIE['id'],
    ],
    [
        'name' => 'Porsche',
        'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.',
        'price' => mt_rand(10000, 100000),
        'user_id' => $_COOKIE['id'],

    ],
    [
        'name' => 'Honda',
        'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.',
        'price' => mt_rand(10000, 100000),
        'user_id' => $_COOKIE['id'],

    ],
    [
        'name' => 'Lamborghini',
        'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.',
        'price' => mt_rand(10000, 100000),
        'user_id' => $_COOKIE['id'],

    ],
    [
        'name' => 'Skoda',
        'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.',
        'price' => mt_rand(10000, 100000),
        'user_id' => $_COOKIE['id'],

    ],
    [
        'name' => 'Tayota',
        'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.',
        'price' => mt_rand(10000, 100000),
        'user_id' => $_COOKIE['id'],
    ],
    [
        'name' => 'Maserati',
        'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.',
        'price' => mt_rand(10000, 100000),
        'user_id' => $_COOKIE['id'],
    ],
    [
        'name' => 'Jeep',
        'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.',
        'price' => mt_rand(10000, 100000),
        'user_id' => $_COOKIE['id'],    
    ],
    [
        'name' => 'Subaru',
        'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.',
        'price' => mt_rand(10000, 100000),
        'user_id' => $_COOKIE['id'],    
    ],
    [
        'name' => 'Dodge',
        'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.',
        'price' => mt_rand(10000, 100000),
        'user_id' => $_COOKIE['id'],
    ],
    [
        'name' => 'Jaguar',
        'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.',
        'price' => mt_rand(10000, 100000),
        'user_id' => $_COOKIE['id'],
    ],
    [
        'name' => 'Mazda',
        'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.',
        'price' => mt_rand(10000, 100000),
        'user_id' => $_COOKIE['id'],
    ],
    [
        'name' => 'Rolls Royse',
        'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.',
        'price' => mt_rand(10000, 100000),
        'user_id' => $_COOKIE['id'],
        
    ],
    [
        'name' => 'Mercedes',
        'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique nesciunt eum eius amet facilis perspiciatis molestias magnam earum sed ipsum. Ut excepturi qui quibusdam officiis sapiente quae impedit ducimus obcaecati aspernatur repudiandae expedita, totam ex voluptate eligendi possimus amet dolor unde architecto non placeat autem? Nemo similique, sed aliquam, voluptatem distinctio alias earum sunt veritatis minus dolores corporis repudiandae nulla dolorum ex quasi est molestias suscipit molestiae corrupti tempore. Ratione, vel provident. Accusamus autem reiciendis ut quia et modi tenetur hic nobis natus quibusdam aliquam quasi sed quis sint, cum earum harum dignissimos fuga nostrum. Pariatur doloribus unde modi ad.',
        'price' => mt_rand(10000, 100000),
        'user_id' => $_COOKIE['id'],

    ],
];


$productList = new ProductList();
$productList->seedDatabase($products);
session_start();
$_SESSION['success'] = 'Products was successfully added';
header('Location: ../index.php');