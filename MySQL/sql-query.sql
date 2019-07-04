1. SELECT DISTINCT id, name FROM category
   LEFT JOIN products_categories ON products_categories.category_id = category.id
   WHERE products_categories.product_id IN(9, 14, 6, 7, 2)

2. SELECT product.id, product.name FROM product
   LEFT JOIN products_categories ON products_categories.product_id = product.id
   WHERE products_categories.category_id = 4
   UNION
   SELECT product.id, product.name FROM product
   LEFT JOIN products_categories ON products_categories.product_id = product.id
   WHERE products_categories.category_id IN(SELECT id FROM category WHERE parent_id = 5)

3. SELECT SUM(p_count) p_sum FROM (
   		SELECT pc.category_id, COUNT(product_id) p_count FROM products_categories pc
   		WHERE pc.category_id IN(3, 4, 5)
   		AND pc.product_id NOT IN (
   			SELECT sub_pc.product_id FROM products_categories sub_pc
   			WHERE sub_pc.category_id IN(3, 4, 5) AND sub_pc.category_id != pc.category_id
   		)
   		GROUP BY category_id
   	) t1

4. SELECT products_categories.category_id, COUNT(products_categories.product_id) FROM products_categories
   WHERE products_categories.category_id IN(2, 3, 4) GROUP BY products_categories.category_id