<% if $Message %>
    <h2 class="message good">$Message</h2>
<% end_if %>

<% if $Member %>
    <h1>Viewing member</h1>
    <ul>
        <li><strong>First Name: </strong>$Member.FirstName</li>
        <li><strong>Surname: </strong>$Member.Surname</li>
        <li><strong>Email: </strong>$Member.Email</li>
    </ul>
<% end_if %>

<h1>Members list</h1>

<% if $MemberList %>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <% loop $MemberList %>
                <tr>
                    <td>$ID</td>
                    <td>$Name</td>
                    <td>
                        <a href="$ViewLink">View user</a> | <a href="$SafeDeleteLink">Delete user</a>
                    </td>
                </tr>
            <% end_loop %>
        </tbody>
    </table>
<% else %>
    <p>No members in the database.</p>
<% end_if %>