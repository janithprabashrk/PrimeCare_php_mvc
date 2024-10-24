<div class="user_view-menu-bar">
    <h2>Requested Tasks</h2>
</div>
<div>
    <div class="date-filter-container">
      <div class="input-group-aligned width-100">
        <label for="year-sort" class="date-label">Year:</label>
        <select id="year-filter" class="date-input-field-small">
          <option value="all">All</option>
          <option value="2024">2024</option>
          <option value="2023">2023</option>
          <!-- Add more years as needed -->
        </select>
      </div>
      <div class="input-group-aligned width-100">
        <label for="month-filter" class="date-label">Month:</label>
        <select id="month-filter" class="date-input-field-small">
          <option value="all">All</option>
          <option value="January">January</option>
          <option value="February">February</option>
          <option value="March">March</option>
          <option value="April">April</option>
          <option value="May">May</option>
          <option value="June">June</option>
          <option value="July">July</option>
          <option value="August">August</option>
          <option value="September">September</option>
          <option value="October">October</option>
          <option value="November">November</option>
          <option value="December">December</option>
        </select>
      </div>
      <div class="input-group-aligned width-100">
        <button id="sort-time-button" class="sort-time-button">Sort</button>
      </div>
    </div>

    <script>
      document.getElementById('sort-time-button').addEventListener('click', function() {
        let container = document.querySelector('.repair-card');
        let cards = Array.from(container.children);
        cards.sort((a, b) => {
          let dateA = new Date(a.getAttribute('data-date'));
          let dateB = new Date(b.getAttribute('data-date'));
          return dateA - dateB;
        });
        cards.forEach(card => container.appendChild(card));
      });
    </script>
    <div>
        <?php require __DIR__ . '/repairCard.php' ?>
        <?php require __DIR__ . '/repairCard.php' ?>
        <?php require __DIR__ . '/repairCard.php' ?>
        <?php require __DIR__ . '/repairCard.php' ?>
        <?php require __DIR__ . '/repairCard.php' ?>
    </div>
</div>