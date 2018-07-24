<ul>
    <% loop $Pages %>
        <li>
            <a href="$Link">$Title</a>
            <% if $Children %>
                <ul>
                    <% loop $Children %>
                        <li>
                            <a href="$Link">$Title</a>
                            <% if $Children %>
                                <ul>
                                    <% loop $Children %>
                                        <li>
                                            <a href="$Link">$Title</a>
                                            <% if $Children %>
                                                <ul>
                                                    <% loop $Children %>
                                                        <li>
                                                            <a href="$Link">$Title</a>
                                                            <% if $Children %>
                                                                <ul>
                                                                    <% loop $Children %>
                                                                        <li>
                                                                            <a href="$Link">$Title</a>
                                                                            <% if $Children %>
                                                                                <ul>
                                                                                    <% loop $Children %>
                                                                                        <li>
                                                                                            <a href="$Link">$Title</a>
                                                                                        </li>
                                                                                    <% end_loop %>
                                                                                </ul>
                                                                            <% end_if %>
                                                                        </li>
                                                                    <% end_loop %>
                                                                </ul>
                                                            <% end_if %>
                                                        </li>
                                                    <% end_loop %>
                                                </ul>
                                            <% end_if %>
                                        </li>
                                    <% end_loop %>
                                </ul>
                            <% end_if %>
                        </li>
                    <% end_loop %>
                </ul>
            <% end_if %>
        </li>
    <% end_loop %>
</ul>