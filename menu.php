<div id="menu-navbar">
    <a href="index.php"><button>Início</button></a>
    <a href="filmeList.php"><button>Filmes</button></a>
    <a href="usuariosList.php"><button>Usuários</button></a>
    
        
    <?php
    
    if( session_status() != PHP_SESSION_ACTIVE ){
        session_start();
    }
    
    if(isset($_SESSION["logado"]) && $_SESSION["logado"]){
        echo '<a href="perfil.php"><button>Perfil</button></a>';
    }
    ?>
    
    <div id="menu-loginbar">
<?php
        
        if(isset($_SESSION["logado"]) && $_SESSION["logado"]){
            echo '<a href="deslogar.php"><button>Deslogar</button></a>';
        }else{
            echo '<a href="login.php"><button>Login</button></a>';
            echo '<a href="cadastro.php"><button>Cadastrar-se</button></a>';
        }

?>
    </div>
</div>