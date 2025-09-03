<html lang="pt-BR"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padaria Altaria</title>
    <style>
        /* Paleta de cores baseada na psicologia para padaria */
        :root {
            --color-brown: #8B4513;       /* Marrom - principal, remete a pão assado */
            --color-gold: #D4AF37;        /* Dourado - luxo, qualidade */
            --color-orange: #FF8C00;      /* Laranja - energia, calor */
            --color-cream: #FFFDD0;       /* Creme - suavidade, aconchego */
            --color-white: #FFFFFF;       /* Branco - pureza, limpeza */
            --color-light-green: #C1E1C1; /* Verde claro - frescor, naturalidade */
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: var(--color-cream);
            color: var(--color-brown);
            line-height: 1.6;
        }
        
        /* Cabeçalho com cores que estimulam o apetite */
        header {
            background: linear-gradient(to right, var(--color-brown), var(--color-orange));
            color: var(--color-white);
            padding: 1rem;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }
        
        nav {
            display: flex;
            justify-content: center;
            background-color: var(--color-brown);
            padding: 0.5rem;
        }
        
        nav a {
            color: var(--color-white);
            text-decoration: none;
            margin: 0 1rem;
            padding: 0.5rem;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        
        nav a:hover {
            background-color: var(--color-orange);
        }
        
        /* Hero section com imagem convidativa */
        .hero {
            height: 400px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://placehold.co/1200x600/8B4513/FFFFFF?text=Pães+Frescos+e+Deliciosos');
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: var(--color-white);
            padding: 2rem;
        }
        
        .hero h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        
        .hero p {
            font-size: 1.2rem;
            max-width: 600px;
            margin-bottom: 1.5rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }
        
        .btn {
            background-color: var(--color-gold);
            color: var(--color-brown);
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 4px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }
        
        .btn:hover {
            background-color: var(--color-orange);
            transform: translateY(-3px);
        }
        
        /* Seção de produtos */
        .products {
            padding: 3rem 1rem;
            text-align: center;
        }
        
        .products h2 {
            color: var(--color-brown);
            margin-bottom: 2rem;
            font-size: 2rem;
        }
        
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .product-card {
            background-color: var(--color-white);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        
        .product-card:hover {
            transform: translateY(-10px);
        }
        
        .product-image {
            height: 200px;
            background-color: var(--color-light-green);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--color-brown);
            font-weight: bold;
        }
        
        .product-info {
            padding: 1.5rem;
        }
        
        .product-info h3 {
            color: var(--color-brown);
            margin-bottom: 0.5rem;
        }
        
        .product-info p {
            color: #666;
            margin-bottom: 1rem;
        }
        
        .price {
            color: var(--color-orange);
            font-weight: bold;
            font-size: 1.2rem;
        }
        
        /* Seção sobre */
        .about {
            background-color: var(--color-brown);
            color: var(--color-white);
            padding: 3rem 1rem;
            text-align: center;
        }
        
        .about-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .about h2 {
            margin-bottom: 1.5rem;
            font-size: 2rem;
        }
        
        /* Rodapé */
        footer {
            background-color: var(--color-brown);
            color: var(--color-white);
            text-align: center;
            padding: 2rem 1rem;
        }
        
        .contact-info {
            margin-bottom: 1.5rem;
        }
        
        .social-links a {
            color: var(--color-white);
            margin: 0 0.5rem;
            font-size: 1.5rem;
            text-decoration: none;
        }
        
        /* Responsividade */
        @media (max-width: 768px) {
            .hero h2 {
                font-size: 2rem;
            }
            
            nav {
                flex-direction: column;
                align-items: center;
            }
            
            nav a {
                margin: 0.3rem 0;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Padaria Altaria</h1>
        <p>O verdadeiro sabor da tradição</p>
    </header>
    
    <nav>
        <a href="#">Home</a>
        <a href="#">Produtos</a>
        <a href="#">Sobre</a>
        <a href="#">Contato</a>
    </nav>
    
    <section class="hero">
        <h2>Pães fresquinhos todos os dias</h2>
        <p>Experimente nossos produtos feitos com ingredientes de qualidade e com muito carinho</p>
        <button class="btn">Fazer Pedido</button>
    </section>
    
    <section class="products">
        <h2>Nossos Produtos</h2>
        <div class="product-grid">
            <div class="product-card">
                <div class="product-image">Pão Francês Quentinho</div>
                <div class="product-info">
                    <h3>Pão Francês</h3>
                    <p>O tradicional pão francês crocante por fora e macio por dentro.</p>
                    <p class="price">R$ 0,90 unidade</p>
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-image">Bolos Caseiros</div>
                <div class="product-info">
                    <h3>Bolos Caseiros</h3>
                    <p>Deliciosos bolos feitos com receitas tradicionais da família.</p>
                    <p class="price">A partir de R$ 15,00</p>
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-image">Doces e Sobremesas</div>
                <div class="product-info">
                    <h3>Doces Finos</h3>
                    <p>Doces e sobremesas para alegrar seu dia e suas comemorações.</p>
                    <p class="price">A partir de R$ 5,00</p>
                </div>
            </div>
            
            <div class="product-card">
                <div class="product-image">Salgados Assados</div>
                <div class="product-info">
                    <h3>Salgados</h3>
                    <p>Salgados assados, perfeitos para o café da manhã ou lanche da tarde.</p>
                    <p class="price">A partir de R$ 6,00</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="about">
        <div class="about-content">
            <h2>Sobre Nós</h2>
            <p>Há mais de 20 anos, a Padaria Altaria entrega seu pão fofo como um pedaço de nunvem do céus.</p>
        </div>
    </section>
    
    <footer>
        <div class="contact-info">
            <p>Endereço: Rua Andreza Ramon Roseli, bairro Lucas, Ernesto-SP</p>
            <p>Telefone: (12) 01010-0110 | WhatsApp: (11) 00101-0101</p>
            <p>Horário de Funcionamento: Segunda a Sábado, 6h às 20h | Domingo, 6h às 13h</p>
        </div>
        <div class="social-links">
            <a href="#">📱 Instagram</a>
            <a href="#">📘 Facebook</a>
            <a href="#">📞 WhatsApp</a>
        </div>
    </footer>

</body></html>