/**
 * Toggles the edit mode on a table row.
 *
 * @param {HTMLElement} row - The table row element.
 * @param {boolean} isEditing - A flag indicating whether to switch to edit mode.
 */
function toggleEditMode(row, isEditing) {
  const cells = row.getElementsByTagName('td');
  const actionsCell = cells[cells.length - 1];
  const editButton = actionsCell.children[0];
  const cancelButton = actionsCell.children[1];

  if (isEditing) {
    // Store the current content and switch to edit mode
    for (let i = 1; i < cells.length - 1; i++) {
      const cell = cells[i];
      cell.setAttribute('data-original-content', cell.innerHTML);
      if (cell === cells[5]) {
        // genreCell
        // Create a select element for genre
        cell.innerHTML = `<select>
        <option value="Adventure">Adventure</option>
        <option value="Classic Literature">Classic Literature</option>
        <option value="Coming-of-age">Coming-of-age</option>
        <option value="Fantasy">Fantasy</option>
        <option value="Historical Fiction">Historical Fiction</option>
        <option value="Horror">Horror</option>
        <option value="Mystery">Mystery</option>
        <option value="Romance">Romance</option>
        <option value="Science Fiction">Science Fiction</option>
  </select>`;
        // Set the correct selected option
        cell.querySelector('select').value = cell.getAttribute(
          'data-original-content'
        );
      } else {
        // Create an input element for other cells
        cell.innerHTML = `<input type="text" value="${cell.textContent.trim()}">`;
      }
    }
    editButton.textContent = 'Save';
    cancelButton.textContent = 'Cancel';
    cancelButton.onclick = function () {
      toggleEditMode(row, false);
    };
    editButton.onclick = function () {
      submitEdit(row);
    };
  } else {
    // Restore the original content if canceling
    for (let i = 1; i < cells.length - 1; i++) {
      const cell = cells[i];
      cell.innerHTML = cell.getAttribute('data-original-content');
    }
    editButton.textContent = 'Edit';
    cancelButton.textContent = 'Delete';
    cancelButton.onclick = function () {
      deleteRow(row.getAttribute('data-id'));
    };
    editButton.onclick = function () {
      toggleEditMode(row, true);
    };
  }
}

/**
 * Deletes a table row after confirmation.
 *
 * @param {number} id - The ID of the user to delete.
 */
function deleteRow(id) {
  if (confirm('Are you sure you want to delete?')) {
    const form = createForm('delete_id', id);
    document.body.appendChild(form);
    form.submit();
  }
}

/**
 * Submits the edited data for a table row.
 *
 * @param {HTMLElement} row - The table row element.
 */
function submitEdit(row) {
  const id = row.getAttribute('data-id');
  const title = row.children[1].querySelector('input').value;
  const description = row.children[2].querySelector('input').value;
  const author = row.children[3].querySelector('input').value;
  const publishing_year = row.children[4].querySelector('input').value;
  // Correctly select the 'select' element and get the value of the selected option
  const genreSelect = row.children[5].querySelector('select');
  const genre = genreSelect.options[genreSelect.selectedIndex].value;

  const form = createForm('edit_id', id);
  form.appendChild(createInput('edit_title', title));
  form.appendChild(createInput('edit_description', description));
  form.appendChild(createInput('edit_author', author));
  form.appendChild(createInput('edit_publishing_year', publishing_year));
  form.appendChild(createInput('edit_genre', genre));
  document.body.appendChild(form);
  form.submit();
}

/**
 * Creates a form element with a specified name and value.
 *
 * @param {string} name - The name attribute for the form's input element.
 * @param {string} value - The value attribute for the form's input element.
 * @returns {HTMLFormElement} The created form element.
 */
function createForm(name, value) {
  const form = document.createElement('form');
  form.method = 'post';
  form.style.display = 'none';
  form.appendChild(createInput(name, value));
  return form;
}

/**
 * Creates an input element with a specified name and value.
 *
 * @param {string} name - The name attribute for the input element.
 * @param {string} value - The value attribute for the input element.
 * @returns {HTMLInputElement} The created input element.
 */
function createInput(name, value) {
  const input = document.createElement('input');
  input.type = 'hidden';
  input.name = name;
  input.value = value;
  return input;
}
