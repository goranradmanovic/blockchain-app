@props([
    'id' => 'defaultChart',
    'title' => 'Default Chart',
    'dataset' => [],
    'labels' => [],
    'type' => 'line'
])

<div class="p-3 bg-neutral-900 rounded-lg">
    <p class="mb-4">{{ $title }}</p>
    <canvas id="{{ $id }}"></canvas>
</div>

<script>
  var ctx = document.getElementById(@json($id)),
    type = @json($type),
    rowLabels = @json($labels),
    rowData = @json($dataset),
    labels = decodeHtmlEntitiesAndParse(rowLabels),
    dataset = decodeHtmlEntitiesAndParse(rowData)

  new Chart(ctx, {
    type: type,
    data: {
      labels: labels,
      datasets: dataset
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  })

  function decodeHtmlEntitiesAndParse(jsonString) {
    // Decode HTML entities
    const decodedString = jsonString.replace(/&quot;/g, '"')

    // Parse JSON
    try {
      return JSON.parse(decodedString)
    } catch (error) {
      console.error("Invalid JSON:", error)
      return null
    }
  }
</script>