<?php $page = $_SERVER['REQUEST_URI']; ?>
<ul class="menu">
    <li class="nav-item">
        <a <?php echo $page == '/index.php' || '/' ? 'class="page"' : null; ?> href="index.php">ГОЛОВНА СТОРІНКА</a>
    </li>
    <li class="nav-item dropdown">
        <a <?php echo $page == '/era.php' ? "class='page'" : null; ?> href="era.php">ЕПОХИ</a>
        <ul class="sub-menu">
            <li class="nav-item"><a <?php echo $page == '/barocco.php' ? "class='page'" : null; ?> href="barocco.php">Бароко</a></li>
            <li class="nav-item"><a <?php echo $page == '/modernism.php' ? "class='page'" : null; ?> href="modernism.php">Модернізм</a></li>
            <li class="nav-item"><a <?php echo $page == '/classicism.php' ? "class='page'" : null; ?> href="classicism.php">Клисицизм</a></li>
            <li class="nav-item"><a <?php echo $page == '/romanticism.php' ? "class='page'" : null; ?> href="romanticism.php">Романтизм</a></li>
        </ul>
    </li>
    <li class="nav-item">
        <a <?php echo $page == '/quiz.php' ? "class='page'" : null; ?> href="quiz.php">ВІКТОРИНА</a>
    </li>
    <li class="nav-item">
        <a <?php echo $page == '/notes.php' ? "class='page'" : null; ?> href="notes.php">НОТИ</a>
    </li>

    <?php if (isset($_SESSION['email'])): ?>
    <li class="nav-item"><a href="profile.php">ПРОФІЛЬ</a></li>
    <li class="nav-item"><a href="logout.php">ВИЙТИ</a></li>
    <?php else: ?>
        <li class="nav-item"><a href="login.php">АВТОРИЗАЦІЯ</a></li>
    <?php endif; ?>

</ul>

