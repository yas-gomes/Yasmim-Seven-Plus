<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.gereacesso.css">
    <title>Gerenciar Acesso e Aparelhos</title>
    <?php include_once ("headerEfooter/import-css.php"); ?>
</head>

<body class="corpo">
    <header class="cabecalho">
    <?php include_once("headerEfooter/header.html"); ?>
    </header>
    
    <main>
        <div class="header-content">
            <button class="back-button" onclick="window.history.back();">&larr; Voltar</button>
        </div>

        <div class="container">
           
            <div class="account-box">
                <div class="device-info">
                    <p>Aparelho X</p>
                    <button class="logout-button">Sair</button>
                </div>
                <div class="profile-info">
                    <img src="img-corpo/miranha.png" alt="Ícone de Perfil" class="profile-icon">
                    <div class="last-access">
                        <p>Último acesso: 01/07/2024</p>
                    </div>
                </div>
                <div class="date-time">
                    <p>Data: 01/07/2024</p>
                    <p>Horário: 14:35</p>
                </div>
            </div>

            
            <div class="account-box">
                <div class="device-info">
                    <p>Aparelho X</p>
                    <button class="logout-button">Sair</button>
                </div>
                <div class="profile-info">
                    <img src="img-corpo/zeze.png" alt="Ícone de Perfil" class="profile-icon">
                    <div class="last-access">
                        <p>Último acesso: 02/07/2024</p>
                    </div>
                </div>
                <div class="date-time">
                    <p>Data: 02/07/2024</p>
                    <p>Horário: 16:00</p>
                </div>
            </div>

            
            <div class="account-box">
                <div class="device-info">
                    <p>Aparelho X</p>
                    <button class="logout-button">Sair</button>
                </div>
                <div class="profile-info">
                    <img src="img-corpo/woody.png" alt="Ícone de Perfil" class="profile-icon">
                    <div class="last-access">
                        <p>Último acesso: 03/07/2024</p>
                    </div>
                </div>
                <div class="date-time">
                    <p>Data: 03/07/2024</p>
                    <p>Horário: 18:25</p>
                </div>
            </div>

            
            <div class="account-box">
                <div class="device-info">
                    <p>Aparelho X</p>
                    <button class="logout-button">Sair</button>
                </div>
                <div class="profile-info">
                    <img src="img-corpo/buzz.png" alt="Ícone de Perfil" class="profile-icon">
                    <div class="last-access">
                        <p>Último acesso: 04/07/2024</p>
                    </div>
                </div>
                <div class="date-time">
                    <p>Data: 04/07/2024</p>
                    <p>Horário: 20:50</p>
                </div>
            </div>
        </div>

        <div class="footer-content">
            <button class="show-more-button">Mostrar Mais</button>
        </div>
    </main>
    
        
   

    <footer class="rodape">
        <?php include_once("headerEfooter/footer.html"); ?>
    </footer>
</body>
</html>