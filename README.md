### Run command to deploy frontend

ng build --aot; rm -f ../../public/_.js; rm -f ../../public/_.css; rm -f ../../public/_.ico;cp dist/frontend/_.js ../../public/; cp dist/frontend/_.ico ../../public/;cp dist/frontend/index.html ../views/index.html; cp dist/frontend/assets/images/_.jpg ../../public/assets/images/; cp dist/frontend/assets/images/_.png ../../public/assets/images/; cp dist/frontend/assets/images/_.svg ../../public/assets/images/; cp dist/frontend/\*.css ../../public/;
