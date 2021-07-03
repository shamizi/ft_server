# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    index.sh                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: shamizi <shamizi@student.42.fr>            +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/03/02 14:08:53 by shamizi           #+#    #+#              #
#    Updated: 2021/03/02 15:56:08 by shamizi          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #
#!/bin/bash

if grep "autoindex on;" /etc/nginx/sites-enabled/nginx.conf; then
	echo "AUTOINDEX: OFF"
	sed -i 's/autoindex on/autoindex off/' /etc/nginx/sites-enabled/nginx.conf
else
	echo "AUTOINDEX: ON"
	sed -i 's/autoindex off/autoindex on/' /etc/nginx/sites-enabled/nginx.conf
fi
nginx -s reload
