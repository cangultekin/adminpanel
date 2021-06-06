<main class="main-margin">
    <!-- datatable -->
    <div class="card mb-4">
        <div class="card-header">
            <i class="fa fa-book"></i>
            Ders Listesi
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Ders Adı</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lessons as $lesson) { ?>
                    <tr>
                        <td style="min-width: 30%;" important!><?php echo $lesson->lesson_name; ?></td>
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