@props([
    'id' => 'defaultTable',
    'title' => 'Default Table',
    'dataset' => [],
    'tableHeight' => '376'
])

<div class="p-3 bg-neutral-900 rounded-lg">
    <p class="mb-4">{{ $title }}</p>
    <div id="{{ $id }}"></div>
</div>

<script type="text/javascript">
	var tableId = document.getElementById(@json($id))
		tableData = decodeHtmlEntitiesAndParse(@json($dataset)), 
		height = @json($tableHeight) + 'px',
		tableColumns = formatTableColumns(Object.keys(tableData[0]))

	//Build Tabulator
	new Tabulator(tableId, {
	    height: height,
	    layout: 'fitColumns',
	    data: tableData,
	    columns: tableColumns
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

	function formatTableColumns(colsArr) {
		return colsArr.map(item => ({
			title: item,
			field: item,
			sorter: 'string',
			hozAlign: 'center',
			formatter: cell => {
				switch(true) {
					case item === 'availability':
						return cell.getValue() + '%'
					break;
					case item === 'status':
						return cell.getValue() ? 'Online' : 'Offline'
					break;
					default:
						return cell.getValue()
				}
			}
		}))
	}
</script>