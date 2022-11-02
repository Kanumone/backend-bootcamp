<nav aria-label="pagination">
    <ul class="pagination pagination-lg justify-content-center">
        <?php for ($i = 1; $i <= $pageData['pagination']['countPages']; $i++):
                $class = $pageData['pagination']['currentPage'] == $i ? "page-item active" : "page-item";
                $link = "?page=$i";;
        ?>
            <li class="<?= $class ?>" aria-current="page">
                <a href="<?= $link ?>" class="page-link"><?= $i ?></a>
            </li>
        <?php endfor; ?>
    </ul>
</nav>
