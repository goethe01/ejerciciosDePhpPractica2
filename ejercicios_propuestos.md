# **15 ejercicios enfocados principalmente en:**

- arrays
- bucles (for, while, foreach)
- condicionales
- funciones de librería de PHP para arrays
- Usaremos funciones como:
    - array_filter
    - array_map
    - array_reduce
    - sort
    - rsort
    - array_sum
    - max
    - min
    - in_array
    - array_count_values
    - implode
    - explode

- Cada ejercicio tendrá entrada y salida esperada.

## **1. Sumar todos los números de un array**

- Usa array_sum().

- Entrada

    $numeros = [4, 7, 2, 9, 5];

- Salida

    La suma es: 27

## 2. **Encontrar el número mayor**

- Usa max().

- Entrada
    - $numeros = [10, 25, 3, 99, 42];
- Salida
    - El número mayor es: 99
## **3. Encontrar el número menor**

- Usa min().

- Entrada
    - $numeros = [8, 12, 4, 19, 6];
- Salida
    - El número menor es: 4
## **4. Contar cuántas veces aparece cada valor**

- Usa array_count_values().

- Entrada
    - $frutas = ["manzana", "pera", "manzana", "banana", "pera", "manzana"];
- Salida
    - manzana => 3
    - pera => 2
    - banana => 1
## **5. Filtrar números mayores a 10**

- Usa array_filter().

- Entrada
    - $numeros = [5, 12, 8, 20, 3, 15];
- Salida
    - [12, 20, 15]
## **6. Convertir todos los números al cuadrado**

- Usa array_map().

- Entrada
    - $numeros = [2, 3, 4, 5];
- Salida
    - [4, 9, 16, 25]
## **7. Verificar si un elemento existe en un array**

- Usa in_array().

- Entrada
    - $colores = ["rojo", "verde", "azul"];
    - $buscar = "verde";
- Salida
    - El color existe en el array

## **8. Ordenar números de menor a mayor**

- Usa sort().

- Entrada
    - $numeros = [9, 3, 7, 1, 6];
- Salida
    - [1, 3, 6, 7, 9]
## **9. Ordenar números de mayor a menor**

- Usa rsort().

- Entrada
    - $numeros = [2, 10, 5, 1];
- Salida
    - [10, 5, 2, 1]

## **10. Convertir un array en texto**

- Usa implode().

- Entrada
    - $palabras = ["PHP", "es", "genial"];
- Salida
    - PHP es genial
## **11. Convertir texto en array**

- Usa explode().

- Entrada
    - $texto = "rojo,verde,azul";
- Salida
    - ["rojo", "verde", "azul"]

## **12. Sumar solo números pares**

- Usa bucle + condicional.

- Entrada
    - $numeros = [1,2,3,4,5,6];
- Salida
    - Suma de pares: 12
    - (2 + 4 + 6)

## **13. Contar palabras largas**

- Cuenta palabras con más de 5 letras.

- Entrada
    - $palabras = ["sol", "computadora", "mesa", "programacion", "php"];
- Salida
    - Palabras largas: 2
## **14. Crear un array con solo strings**

- Usa array_filter() y gettype().

- Entrada
    - $datos = [10, "hola", true, "php", 3.14, "codigo"];
- Salida
    - ["hola", "php", "codigo"]

## **15. Promedio usando array_reduce**

- Usa array_reduce().

- Entrada
    - $notas = [4, 3, 5, 2, 4];
- Salida
    - Promedio: 3.6

## **Ejercicio BONUS (nivel más real)**
- Analizador de ventas
- Entrada
    - $ventas = [120, 340, 90, 560, 230];

- Debes calcular:

- total

- promedio

- venta mayor

- venta menor

- Salida
    - Total ventas: 1340
    - Promedio: 268
    - Mayor venta: 560
    - Menor venta: 90

## **Consejo importante para aprender PHP rápido**

- Cuando hagas estos ejercicios intenta usar:
    - foreach
    - array_map
    - array_filter
    - array_reduce
- porque son el pan de cada día en backend PHP.