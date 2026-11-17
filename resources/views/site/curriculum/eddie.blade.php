<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('imgs/sistema/zr2.png') }}" rel="shortcut icon" /></link>
    <title>{{ config('app.name', 'PKCia.Siga') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Isso garante que o rodapé fique no fundo da folha no PDF */
        @media print {
            @page {
                margin: 1.5cm 1.5cm 2.5cm 1.5cm; /* Superior, Direita, Inferior, Esquerda */
                margin-bottom: 2.5cm; 
            } 
                      
            .footer-repetir {
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
                text-align: center;
                border-top: 1px solid #ddd;
                font-size: 10px;
                padding: 10px 0;
            }
        }

        /* Isso garante que ele fique no fundo da tela no navegador */
        .footer-tela {
            position: fixed;
            bottom: 0;
            width: 100%;
            background: white;
            text-align: center;
            font-size: 9px;
            z-index: 999;
        }

        /* Para visualização no navegador também fixar no final */
        .footer-fixo {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: white;
            padding: 10px 0;
        }
        section {
            width: 100% !important; /* Mude de 75% para 100% no PDF */
        }
    </style>

    <body> 
    <div class="footer-repetir footer-tela">
        g
    </div>

    <center>
    <nav class="bg-gray-800 py-4">
        <div class="container mx-auto flex justify-between items-center">
            
            <!-- Logo ou título -->
            <a href="" class="text-white font14"><img width='100px;' src="{{ asset('imgs/juridico/jbsa.png') }}">
                guilherme e  associados
            <b class="text-white font8"></b>
            </a>

            <div>
                <!-- Links do menu -->
                <ul class="flex space-x-4">
                    <li><a href="{{ asset('gerapdf/eddie') }}" class="text-white font8" style="padding-right:30px;">
                            Gerar PDF<b class="font40 text-white"><strong>CV</strong> 
                        </b>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <a href="javascript:history.back()">
        <p class="retorna bg-green hover:bg-red-500 text-white font-bold py-2 px-4 rounded" >&times;</p>
    </a>
    <section style='width:70%; overflow-y: auto;'>
        
        <div>
            <nav class="flex justify-center my-4" style="width:80%; padding:10px 10px 10px 0; background-color:transparent; border-radius: 0 0 25px 0;">
                <div class="container-fluid w-full">
                    <!-- Adicionado: flex items-center justify-between no container pai -->
                    <div class="row texto-esquerda flex items-center justify-between gap-4" style="width:80%; margin-left:15%; position:relative;">
                        
                        <!-- Lado Esquerdo: Nome e OAB -->
                        <div class="flex">
                            <div id="pessoal1" class="text-center md:text-left z-10 cor1">
                                <p class="f-siga1 cor1 font-bold">Guilherme</p>
                                <p class="phont2 cor1">S O U Z A</p>
                                <p class="phont2 cor1" style="font-size:12px;">OAB 237 666 / SP </p>
                            </div>
                        </div>

                        <!-- Centro: Imagem -->'
                        <div id="image1" class="z-10 shrink-0">
                            <img class="w-24 md:w-28 lg:w-32" src="{{ asset('/imgs/sistema/eae.jpeg') }}" style="border-radius:50%;"/><br>
                        </div>

                        <!-- Lado Direito: Dados de Contato -->
                        <div id="pessoal2" class="texto-esquerda cor1 text-[12px] z-10">
                            <div class="texto-esquerda cor1" style="z-index: 1;">
                                <p class="phont2 flex items-center gap-1" style="font-size:12px;"><img class="icon" width='14px;' src="{{ asset('/imgs/icones/location-place.png') }}"/> Rua Agenor de Barros, 130</p>
                                <p class="phont2" style="font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ponte Rasa, cep 03881-100 São Paulo-SP</p>
                                <p class="phont2 flex items-center gap-1" style="font-size:12px;"><img class="icon" width='14px;' src="{{ asset('/imgs/icones/phone-symbol.png') }}"/> Fone : 5511 98501-1431 / 5511 3804-1647</p>
                                <p class="phont2 flex items-center gap-1" style="font-size:12px;"><img class="icon" width='14px;' src="{{ asset('/imgs/icones/mail-email.png') }}"/> e-mail: edjo90@gmail.com</p>
                            </div>
                        </div>    
                        
                    </div>
                    <hr class="mt-4">
                </div>
            </nav>
            
        </div>
        
        <div style="display: inline-block; width:75%; padding-left:20px; padding-right:100px;" class="div-alinhada-direita">
                    <div class="texto-esquerda justify-center" style="text-align:justify;" ><br>
                        <p class="f-cabeca1"><a href="" class="text-blue text-md font-bold f-siga1">
                            Objetivo(s) :</a>
                        </p>
                        <p class="grid justify-items-auto grid-cols-0 text-align: justify;">
                          Busco uma oportunidade para iniciar minha trajetória profissional, adquirir experiência e aprender mais sobre o mercado de trabalho. Tenho interesse em desenvolver novas habilidades, ampliar meus conhecimentos e contribuir com a empresa, sempre buscando aprender e evoluir profissionalmente.
                        
                      
                        </p><br>

                        <p class="f-cabeca1 f-siga1 cor1 font-bold">Formação Acadêmica</p>

                            <p class="grid justify-items-auto" style="padding-bottom:5px;">
                                <p class="f-entidade">
                                    <p class="f-negrito">Instituto Bradesco</p>

                            
                                    <p class="f-menor1">curso orientado a objetos(POO)</p>
                                    <p class="f-menor1"></p>
                                </p>
                                <p class="f-entidade">
                                    <p class="f-negrito">Desenvolvimento de sistemas- formacao tecnica</p>
                                    <p class="f-menor1">Curso de Direito Digital</p>
                                    <p class="f-menor1"></p>
                                </p>
                                <p class="f-entidade">
                                    <p class="f-negrito"></p>
                                    <p class="f-menor1"></p>
                                    <p class="f-menor1"></p>
                                </p>

                                <p class="f-cabeca1 f-siga1 cor1 font-bold">Cursos e Treinamentos</p>
                                <p class="f-entidade">
                                    <p class="f-negrito">
                                </p>
                                <p class="f-entidade">
                                    <p class="f-negrito">instituro bradesco</p>
                                    <p class="f-menor1">programacao orientada a objetos, python</p>
                                </p>
                                <p class="f-entidade">
                                    <p class="f-negrito"></p>
                                    <p class="f-menor1"></p>
                                </p>
                                
                            </p>
                            <br>
                            <p class="f-cabeca1 f-siga1 cor1 font-bold">Experiências Profissionais</p>

                            
                            <p><lb class="f-menor1">n/a
                          

                            

                            <p class="f-cabeca1 f-negrito f-siga1 cor1 font-bold">Experiências e Conhecimentos gerais</p>
                            <br>
                            <p><b class=" f-negrito">Projetos Relevantes</b>
                                <p>
                                • n/a
                                
                                </p>
                            </p>
                            <br>
                            <p><b class=" f-negrito">Habilidades Técnicas</b>
                                <p>
                                • Linguagens:  Python
                                
                                </p>
                            </p>
                            <br>
                            <p><b class=" f-negrito">Direito Digital e Perícia Forense</b>
                                <p>
                                • n\a
                            </p>
                            <p><br><br><br></p>
                        </div>

                        
        </div>

    </section>
    </center>
    </body>
</html>
