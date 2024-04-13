<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
</head>
<body>
    <div class="w-screen h-screen flex justify-center items-center">
        <div class=" shadow-xl rounded-md">
            <form action="" method="POST" class="flex flex-col items-center gap-4 justify-center h-full">
                <input type="text" class="shadow-md h-10 rounded-md w-full placeholder:text-sm pl-2" name="email" id="email" placeholder="Email...">
                <input type="text" class="shadow-md h-10 rounded-md w-full placeholder:text-sm pl-2" name="password" id="password" placeholder="Password...">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md"> Login </button>
            </form>
        </div>
    </div>
</body>
</html>