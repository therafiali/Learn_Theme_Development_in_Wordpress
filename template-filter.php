<?php
/* Template Name: Filter */
get_header();
?>

<h1>Latest Filter</h1>

<style>
* {
  box-sizing: border-box;
}

#myDropdowns {
  margin-bottom: 12px;
}

#myDropdown {
  width: 100%;
  font-size: 16px;
  padding: 12px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>

<h2>Filter Table Using Dropdowns</h2>

<div id="myDropdowns">
  <select id="countryDropdown" onchange="updateStates()">
    <option value="">Select a Country</option>
    <option value="India">India</option>
  </select>

  <select id="stateDropdown" onchange="updateCities()">
    <option value="">Select a State</option>
  </select>

  <select id="cityDropdown" onchange="filterTable()">
    <option value="">Select a City</option>
  </select>
</div>

<table id="myTable">
  <tr class="header">
    <th style="width:40%;">Customer Name</th>
    <th style="width:30%;">State</th>
    <th style="width:30%;">City</th>
  </tr>
  <tr>
    <td>Person 1</td>
    <td>Delhi</td>
    <td>Delhi</td>
  </tr>
  <tr>
    <td>Person 2</td>
    <td>Maharashtra</td>
    <td>Mumbai</td>
  </tr>
  <tr>
    <td>Person 3</td>
    <td>Uttar Pradesh</td>
    <td>Lucknow</td>
  </tr>
  <tr>
    <td>Person 4</td>
    <td>Delhi</td>
    <td>New Delhi</td>
  </tr>
  <tr>
    <td>Person 5</td>
    <td>Maharashtra</td>
    <td>Pune</td>
  </tr>
  <tr>
    <td>Person 6</td>
    <td>Uttar Pradesh</td>
    <td>Kanpur</td>
  </tr>
</table>

<script>
const statesCities = {
  "India": {
    "Delhi": ["Delhi", "New Delhi"],
    "Maharashtra": ["Mumbai", "Pune"],
    "Uttar Pradesh": ["Lucknow", "Kanpur"]
  }
};

function updateStates() {
  const countryDropdown = document.getElementById("countryDropdown");
  const stateDropdown = document.getElementById("stateDropdown");
  const selectedCountry = countryDropdown.value;

  // Clear previous state and city options
  stateDropdown.innerHTML = '<option value="">Select a State</option>';
  document.getElementById("cityDropdown").innerHTML = '<option value="">Select a City</option>';

  if (selectedCountry && statesCities[selectedCountry]) {
    for (const state in statesCities[selectedCountry]) {
      stateDropdown.innerHTML += `<option value="${state}">${state}</option>`;
    }
  }
  
  // Trigger filterTable to apply filtering if a state is selected
  filterTable();
}

function updateCities() {
  const stateDropdown = document.getElementById("stateDropdown");
  const cityDropdown = document.getElementById("cityDropdown");
  const selectedState = stateDropdown.value;

  // Clear previous city options
  cityDropdown.innerHTML = '<option value="">Select a City</option>';

  if (selectedState && statesCities["India"][selectedState]) {
    const cities = statesCities["India"][selectedState];
    for (const city of cities) {
      cityDropdown.innerHTML += `<option value="${city}">${city}</option>`;
    }
  }

  // Trigger filterTable to apply filtering if a city is selected
  filterTable();
}

function filterTable() {
  const countryDropdown = document.getElementById("countryDropdown");
  const stateDropdown = document.getElementById("stateDropdown");
  const cityDropdown = document.getElementById("cityDropdown");
  
  const selectedState = stateDropdown.value;
  const selectedCity = cityDropdown.value;

  const table = document.getElementById("myTable");
  const tr = table.getElementsByTagName("tr");

  for (let i = 1; i < tr.length; i++) {  // Start from 1 to skip the header row
    const tdState = tr[i].getElementsByTagName("td")[1];
    const tdCity = tr[i].getElementsByTagName("td")[2];
    
    let stateMatch = true;
    let cityMatch = true;
    
    if (selectedState && tdState) {
      stateMatch = tdState.textContent.trim() === selectedState;
    }
    
    if (selectedCity && tdCity) {
      cityMatch = tdCity.textContent.trim() === selectedCity;
    }
    
    if ((selectedState === "" || stateMatch) && (selectedCity === "" || cityMatch)) {
      tr[i].style.display = "";
    } else {
      tr[i].style.display = "none";
    }
  }
}
</script>

<?php
get_footer();
?>
