<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós - Padaria Altaria</title>
    <style>
        :root {
            --primary-color: #8B4513;
            --secondary-color: #FFF8DC;
            --accent-color: #D2B48C;
            --text-color: #654321;
            --light-color: #F5F5DC;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            background-color: var(--light-color);
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header */
        header {
            background-color: var(--primary-color);
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            color: white;
            font-size: 1.8rem;
            font-weight: bold;
            text-decoration: none;
            display: flex;
            align-items: center;
        }
        
        .logo i {
            margin-right: 10px;
        }
        
        .nav-links {
            display: flex;
            list-style: none;
        }
        
        .nav-links li {
            margin-left: 25px;
        }
        
        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: opacity 0.3s;
        }
        
        .nav-links a:hover {
            opacity: 0.8;
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1509440159596-0249088772ff?ixlib=rb-4.0.3') center/cover no-repeat;
            color: white;
            text-align: center;
            padding: 100px 0;
        }
        
        .hero h1 {
            font-size: 2.8rem;
            margin-bottom: 20px;
        }
        
        .hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto;
        }
        
        /* About Section */
        .about-section {
            padding: 80px 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
            padding-bottom: 15px;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--primary-color);
        }
        
        .about-content {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            align-items: center;
            margin-bottom: 60px;
        }
        
        .about-text {
            flex: 1;
            min-width: 300px;
        }
        
        .about-text p {
            margin-bottom: 20px;
            font-size: 1.1rem;
        }
        
        .about-image {
            flex: 1;
            min-width: 300px;
        }
        
        .about-image img {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        /* Values Section */
        .values-section {
            background-color: var(--secondary-color);
            padding: 80px 0;
        }
        
        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .value-card {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s;
        }
        
        .value-card:hover {
            transform: translateY(-10px);
        }
        
        .value-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }
        
        .value-card h3 {
            margin-bottom: 15px;
            color: var(--primary-color);
        }
        
        /* Team Section */
        .team-section {
            padding: 80px 0;
        }
        
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }
        
        .team-member {
            text-align: center;
        }
        
        .team-image {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 20px;
            border: 5px solid var(--accent-color);
        }
        
        .team-member h3 {
            margin-bottom: 5px;
            color: var(--primary-color);
        }
        
        .team-role {
            color: #777;
            margin-bottom: 15px;
            font-style: italic;
        }
        
        /* Footer */
        footer {
            background-color: var(--primary-color);
            color: white;
            padding: 50px 0 20px;
        }
        
        .footer-content {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            margin-bottom: 30px;
        }
        
        .footer-column {
            flex: 1;
            min-width: 250px;
        }
        
        .footer-column h3 {
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-column h3:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background-color: white;
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: #eee;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: white;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255,255,255,0.1);
            border-radius: 50%;
            color: white;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        
        .social-links a:hover {
            background-color: rgba(255,255,255,0.2);
        }
        
        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,0.1);
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
            }
            
            .nav-links {
                margin-top: 20px;
            }
            
            .nav-links li {
                margin: 0 10px;
            }
            
            .hero h1 {
                font-size: 2.2rem;
            }
            
            .about-content {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="#" class="logo">
                    <i class="fas fa-bread-slice"></i>Padaria Altaria
                </a>
                <ul class="nav-links">
                    <li><a href="/">Home</a></li>
                    <li><a href="/sobre" class="active">Sobre Nós</a></li>
                    <li><a href="/produtos">Produtos</a></li>
                    <li><a href="/contato">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Nossa História</h1>
            <p>Conheça a tradição e paixão que fazem da Padaria Altaria um lugar especial há mais de 30 anos</p>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <h2 class="section-title">Sobre a Altaria</h2>
            
            <div class="about-content">
                <div class="about-text">
                    <p>Fundada em 1990, a Padaria Altaria nasceu do sonho de oferecer à comunidade produtos de panificação de alta qualidade, feitos com ingredientes selecionados e técnicas artesanais.</p>
                    <p>Localizada no coração da cidade, na Rua dos Padeiros, 45 - Centro, São Paulo, nossa padaria tornou-se referência em pães, bolos e salgados, sempre mantendo a tradição e o sabor caseiro que conquistaram nossos clientes.</p>
                    <p>O nome "Altaria" foi inspirado na busca pela elevação da qualidade, sempre aiming higher (mirando mais alto) para oferecer o melhor em panificação. Nossa missão vai além de simplesmente vender pães; queremos proporcionar experiências gastronômicas que remetam ao aconchego do lar.</p>
                </div>
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1608190003443-86b12a5b5bb5?ixlib=rb-4.0.3" alt="Interior da Padaria Altaria">
                </div>
            </div>
            
            <div class="about-content">
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1544787219-7f47ccb76574?ixlib=rb-4.0.3" alt="Produtos da Padaria Altaria">
                </div>
                <div class="about-text">
                    <p>Ao longo de três décadas, mantivemos nossos valores fundamentais: qualidade superior, atendimento personalizado e compromisso com a comunidade local.</p>
                    <p>Nossos mestres padeiros trabalham durante a madrugada para que nossos clientes possam desfrutar de pães fresquinhos todas as manhãs. Utilizamos fermentação natural em muitos de nossos produtos, um método tradicional que realça o sabor e melhora a digestibilidade.</p>
                    <p>Além de nossa loja física, estamos sempre inovando e adaptando nossos serviços para melhor atender às necessidades dos clientes, com encomendas online e delivery.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values-section">
        <div class="container">
            <h2 class="section-title">Nossos Valores</h2>
            
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h3>Qualidade Superior</h3>
                    <p>Utilizamos apenas ingredientes frescos e selecionados, priorizando produtores locais e orgânicos sempre que possível.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Tradição Artesanal</h3>
                    <p>Mantemos as receitas e métodos tradicionais, com fermentação lenta e preparo cuidadoso para o sabor autêntico.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Compromisso Social</h3>
                    <p>Participamos ativamente da comunidade local, apoiando eventos e iniciativas que fortalecem os laços regionais.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <h2 class="section-title">Nossa Equipe</h2>
            
            <div class="team-grid">
                <div class="team-member">
                    <img src="https://images.unsplash.com/photo-1566554273541-37a9ca77b91f?ixlib=rb-4.0.3" alt="João Silva" class="team-image">
                    <h3>João Silva</h3>
                    <p class="team-role">Fundador e Mestre Padeiro</p>
                    <p>Com mais de 40 anos de experiência, João é o responsável pelos nossos pães de fermentação natural.</p>
                </div>
                
                <div class="team-member">
                    <img src="https://images.unsplash.com/photo-1577219491135-ce391730fb2c?ixlib=rb-4.0.3" alt="Maria Santos" class="team-image">
                    <h3>Maria Santos</h3>
                    <p class="team-role">Chef Confeiteira</p>
                    <p>Maria traz sua expertise em confeitaria francesa para nossos bolos e doces irresistíveis.</p>
                </div>
                
                <div class="team-member">
                    <img src="https://images.unsplash.com/photo-1595273670150-bd0c3c392e46?ixlib=rb-4.0.3" alt="Carlos Oliveira" class="team-image">
                    <h3>Carlos Oliveira</h3>
                    <p class="team-role">Gerente</p>
                    <p>Carlos garante que tudo funcione perfeitamente e que nossos clientes tenham a melhor experiência.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Padaria Altaria</h3>
                    <p>Há mais de 30 anos oferecendo os melhores pães, bolos e salgados com qualidade incomparável.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                
                <div class="footer-column">
                    <h3>Links Rápidos</h3>
                    <ul class="footer-links">
                        <li><a href="/">Home</a></li>
                        <li><a href="/sobre">Sobre Nós</a></li>
                        <li><a href="/produtos">Nossos Produtos</a></li>
                        <li><a href="/contato">Contato</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Contato</h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt"></i> Rua dos Padeiros, 45 - Centro</li>
                        <li><i class="fas fa-phone"></i> (11) 3456-7890</li>
                        <li><i class="fas fa-envelope"></i> contato@altaria.com.br</li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Horário de Funcionamento</h3>
                    <ul class="footer-links">
                        <li>Segunda a Sexta: 6h-20h</li>
                        <li>Sábados: 6h-19h</li>
                        <li>Domingos: 7h-14h</li>
                    </ul>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; 2023 Padaria Altaria. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Font Awesome Kit -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>