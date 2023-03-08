

<section>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@1.9.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
<!-- This is an example component -->
<div class="h-screen font-sans login bg-cover">
    <div class="container mx-auto h-full flex flex-1 justify-center items-center">
        <div class="w-full max-w-lg">
            <div class="leading-loose">



                <form class="max-w-sm m-4 p-10 bg-black bg-opacity-25 rounded shadow-xl"  method="POST" action="{{ route('user.store') }}">
                    @csrf
                    <p class="text-black font-medium text-center text-lg font-bold">CADASTRO</p>

                    <div class="">
                        <label class="block text-sm text-black" for="name">Nome</label>
                        <input  class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white" type="text" id="name" name="name" placeholder="Digite o seu nome" aria-label="name" required>
                    </div>

                    <div class="">
                        <label class="block text-sm text-black" for="email">E-mail</label>
                        <input  class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white" type="email" id="email" name="email"  placeholder="Digite o e-mail" aria-label="email" required>
                    </div>


                    <div class="mt-2">
                        <label class="block  text-sm text-black">Senha</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white"
                               type="password" id="password" name="password" placeholder="Digite a sua senha" aria-label="password"
                               required>
                    </div>


                    <div class="p-2 w-2/3">
                        <button
                            type="submit"
                            class=  "flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Cadastrar
                        </button>

                    </div>
                    <div class="text-center">
                        <a href="{{route('login')}}" class="inline-block right-0 align-baseline font-light text-sm text-500 hover:text-red-400">
                            Voltar a tela de login
                        </a>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
<style>
    .login{
        /*
          background: url('https://tailwindadmin.netlify.app/dist/images/login-new.jpeg');
        */
        /*background: url('http://bit.ly/2gPLxZ4');*/
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
</body>
</html>
</section>
