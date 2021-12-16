<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col my-2">
            <h2 class="my-3">Contact Me</h2>
            <ul class="list-group">
                <li class="list-group-item col-sm-2">
                    <a href="https://www.instagram.com/rizkyhaksonoo/" class="text-dark nav-link"><img src="https://img.icons8.com/material-outlined/24/000000/instagram-new--v1.png" /> Instagram</a>
                    <a href="https://github.com/rizkyhaksono" class="text-dark nav-link"><img src="https://img.icons8.com/ios-glyphs/24/000000/github.png" /> Github</a>
                    <a href="https://twitter.com/rizkyhaksono" class="text-dark nav-link"><img src="https://img.icons8.com/ios-glyphs/24/000000/twitter--v1.png" /> Twitter</a>
                    <a href="https://discordapp.com/users/445224810511859733/" class="text-dark nav-link"><img src="https://img.icons8.com/material-rounded/24/000000/discord-logo.png" /> Discord</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>