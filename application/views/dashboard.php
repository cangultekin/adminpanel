<main class="main-margin">
    <!-- datatable -->
    <div class="card mb-4">
        <div class="card-header">
            <i class="fa fa-users"></i>
            Öğrenci Listesi
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th style="min-width: 30%;" important!>Ad</th>
                        <th style="min-width: 30%;" important!>Soyad</th>
                        <th style="min-width: 30%;" important!>Adres</th>
                        <th style="max-width: 10%;" important!>Dersler</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($identities as $identity) { ?>
                    <tr>
                        <td style="min-width: 30%;" important!><?php echo $identity->name; ?></td>
                        <td style="min-width: 30%;" important!><?php echo $identity->surname; ?></td>
                        <td style="min-width: 30%;" important!><?php echo $identity->addres; ?></td>
                        <td style="max-width: 10%;" important!>
                            <div class="frame"><a class="custom-btn btn-15"
                                    href="<?php echo base_url() . 'students_detail?student_id=' . $identity->id; ?>">
                                    Dersler
                                    &#10140;
                                </a></div>
                        </td>
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