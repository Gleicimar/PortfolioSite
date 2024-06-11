<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/port.css">
    <script>
        function increaseskill(button) {
            var skillContainer = button.previousElementSibling;
            var barSkill = skillContainer.querySelector('.bar_skill');
            var skillValue = skillContainer.querySelector('h3');

            var width = parseInt(barSkill.style.width) || 0; // Inicializa como 0 se estiver vazio
            if (width < 100) {
                width += 10;
                barSkill.style.width = width + '%';
                skillValue.textContent = width + '%';
            }
            if(width==100){
                button.disabled=true;
            }
        }
    </script>
</head>
<body>
<header>
        <div class="center">
            <div class="photo">
                <img src="images/innoauto.svg" alt="imagem autor">
            </div>
            <div class="nome_photo">
                <h2>Gleicimar Ribeiro Pereira</h2>
            </div>
            <div class="learn_skill">
                <h2>Aprendendo atualmente</h2>
                <div class="skill_l">
                    <span>React-Native <i class="fa-brands fa-react"></i></span>
                    <div class="barr">
                        <div class="bar_skill"></div>
                        <h3>0%</h3>
                    </div>
                    <button onclick="increaseskill(this)" class="increase" role="button">+</button>
                </div>
                <div class="skill_l">
                    <span>Node Js <i class="fa-brands fa-node-js"></i></span>
                    <div class="barr">
                        <div class="bar_skill"></div>
                        <h3>0%</h3>
                    </div>
                    <button onclick="increaseskill(this)" class="increase" role="button">+</button>
                </div>
                <div class="skill_l">
                    <span>Java <i class="fa-brands fa-java"></i> </span>
                    <div class="barr">
                        <div class="bar_skill"></div>
                        <h3>0%</h3>
                    </div>
                    <button onclick="increaseskill(this)" class="increase" role="button">+</button>
                </div>
                <div class="skill_l">
                    <span>Vue Js <i class="fa-brands fa-vuejs"></i></span>
                    <div class="barr">
                        <div class="bar_skill"></div>
                        <h3>0%</h3>
                    </div>
                    <button onclick="increaseskill(this)" class="increase" role="button">+</button>
                </div>
            </div>
        </div>
    </header>
    <section class="quem">
        <div class="center">
            <h2>Quem sou eu</h2>
            <p>Sou um apaixonado por tecnologia, tenho 30 anos, sou formado em Técnico de Informática para Web, tenho alguns certificados da plataforma EAD Danki Code.</p>
        </div>
</section>
    <section class="skill">
        <div class="center">
            <h2>Habilidades</h2>
        <div class="learn_skill">
                <div class="skill_l">
                    <span>Html5 <i class="fa-brands fa-html5"></i></span>
                    <div class="barr">
                        <div class="bar_skill"></div>
                        <h3>0%</h3>
                    </div>
                    <button onclick="increaseskill(this)" class="increase" role="button">+</button>
                </div>
                <div class="skill_l">
                    <span>Css3 <i class="fa-brands fa-css3-alt"></i> </span>
                    <div class="barr">
                        <div class="bar_skill"></div>
                        <h3>0%</h3>
                    </div>
                    <button onclick="increaseskill(this)" class="increase" role="button">+</button>
                </div>
                <div class="skill_l">
                    <span>Javascript <i class="fa-brands fa-js"></i></span>
                    <div class="barr">
                        <div class="bar_skill"></div>
                        <h3>0%</h3>
                    </div>
                    <button onclick="increaseskill(this)" class="increase" role="button">+</button>
                </div>
                <div class="skill_l">
                    <span>PHP <i class="fa-brands fa-php"></i></span>
                    <div class="barr">
                        <div class="bar_skill"></div>
                        <h3>0%</h3>
                    </div>
                    <button onclick="increaseskill(this)" class="increase" role="button">+</button>
                </div>
            </div>
        </div>
    </section>
    <section class="ultimos_projetos">
        <div class="center">
            <h2>Projetos</h2>
            <p>Veja aqui os ultimos projetos realizados por mim</p>
            <div class="projeto">
                <img src="imagem-projeto-1.jpg" alt="Projeto 1">
                <div class="projeto-info">
                    <h4>Projeto 1</h4>
                    <p>Breve descrição do projeto 1.</p>
                    <div class="projeto-tags">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>JavaScript</span>
                    </div>
                    <a href="#" class="projeto-link">Ver mais</a>
                </div>
            </div>
            <!-- Adicione mais divs .projeto para outros projetos -->
            <div class="projeto">
                <img src="imagem-projeto-1.jpg" alt="Projeto 1">
                <div class="projeto-info">
                    <h4>Projeto 1</h4>
                    <p>Breve descrição do projeto 1.</p>
                    <div class="projeto-tags">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>JavaScript</span>
                    </div>
                    <a href="#" class="projeto-link">Ver mais</a>
                </div>
            </div>
            <div class="projeto">
                <img src="imagem-projeto-1.jpg" alt="Projeto 1">
                <div class="projeto-info">
                    <h4>Projeto 1</h4>
                    <p>Breve descrição do projeto 1.</p>
                    <div class="projeto-tags">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>JavaScript</span>
                    </div>
                    <a href="#" class="projeto-link">Ver mais</a>
                </div>
            </div>
            <div class="projeto">
                <img src="imagem-projeto-1.jpg" alt="Projeto 1">
                <div class="projeto-info">
                    <h4>Projeto 1</h4>
                    <p>Breve descrição do projeto 1.</p>
                    <div class="projeto-tags">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>JavaScript</span>
                    </div>
                    <a href="#" class="projeto-link">Ver mais</a>
                </div>
            </div>
        </div>

        </div>
    </section>
    <section class="fale_conosco">
    <div class="center">
        <form action="" method="post">
            <h2>Fale Conosco</h2>
            <p>Entre em contato comigo</p>
            <div class="input_container">
                <i class="fas fa-user"></i>
                <input type="text" name="nome" id="nome" placeholder="Nome" required>
            </div>
            <div class="input_container">
            <i class="fas fa-email"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="input_container">
            <i class="fas fa-envelope"></i>
                <input type="text" name="assunto" id="assunto" placeholder="Assunto" required>
            </div>
            <div class="input_container textarea">
                <i class="fas fa-comment-alt"></i>
                <textarea name="mensagem" id="mensagem" cols="30" rows="10" placeholder="Mensagem" required></textarea>
    
</body>
</html>