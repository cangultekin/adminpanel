<main class="main-margin">
    <!-- datatable -->
    <div class="card mb-4">
        <div class="card-header">
            <i class="fa fa-user"></i>
            Kullanıcı Listesi
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Ad</th>
                        <th>Soyad</th>
                        <th>Mail Adres</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) { ?>
                    <tr>
                        <td style="min-width: 30%;" important!><?php echo $user->user_name; ?></td>
                        <td style="min-width: 30%;" important!><?php echo $user->user_surname; ?></td>
                        <td style="min-width: 30%;" important!><?php echo $user->email; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <details style="margin-bottom: 40px;">
        <summary>Ödev</summary>
        <code>
            Örnek bir öğrenci veri tabanı için kimlik bilgilerinin ve ders notlarının ayrı metodlarda servis
            edildiği bir web servis yazabilir misiniz ? Servisi kullanacak olan client için bir authorization yöntemi
            kullanınız. Servisinizi github'da paylaşabilirsiniz. Linki iletmeniz yeterli olur.
        </code>
    </details>
</main>