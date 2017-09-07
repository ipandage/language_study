%#template to generate a HTML table from a list of tuples (or list of lists, or tuple of tuples or ...)
<p>The open items are as follows:</p>
<a href="/new">Add</a>
<table border="1">
%for row in rows:
  <tr>
  %for col in row:
    <td>{{col}}</td>
  %end
  <td><a href="/edit/{{row[0]}}">Edit</a></td>
  <td><a href="/delete/{{row[0]}}">Delete</a></td>
  </tr>
%end
</table>