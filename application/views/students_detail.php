<main class="main-margin">
    <!-- datatable -->
    <div class="card mb-4">
        <div class="card-header">
            <i class="fa fa-user"></i>
            <?php echo $student_info[0]->name . " " . $student_info[0]->surname; ?> Adlı Öğrencinin Ders notları
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th style="max-width: 33%;" important!>Matematik</th>
                        <th style="max-width: 33%;" important!>Fizik</th>
                        <th style="max-width: 34%;" important!>Biyoloji</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($student_info as $si) { ?>
                    <tr>
                        <td style="max-width: 33%;" important!><?php echo $si->math_grade; ?></td>
                        <td style="max-width: 33%;" important!><?php echo $si->physics_grade; ?></td>
                        <td style="max-width: 34%;" important!><?php echo $si->biology_grade; ?></td>
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