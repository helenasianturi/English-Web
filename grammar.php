<h2>Grammar</h2>
<?php if (!empty($vocabularyData)): ?>
    <ul class="vocab-list">
    <?php foreach ($vocabularyData as $item): ?>
        <li>
            <strong><?= htmlspecialchars($item['english']) ?></strong>: 
            <?= htmlspecialchars($item['indonesian']) ?> 
            <em>(<?= htmlspecialchars($item['category']) ?>)</em>
        </li>
    <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>There is no data longer</p>
<?php endif; ?>