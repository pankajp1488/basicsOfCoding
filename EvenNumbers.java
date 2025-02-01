import java.util.Scanner;

public class EvenNumbers {
    public static void main(String[] args) {
        // Create a scanner object to take user input
        Scanner scanner = new Scanner(System.in);

        // Prompt the user for input
        System.out.println("Enter the number of elements you want to check:");
        int n = scanner.nextInt(); // Number of elements to check

        System.out.println("Enter " + n + " numbers:");

        // Loop through and check each number
        for (int i = 0; i < n; i++) {
            int num = scanner.nextInt(); // Take each number from user

            // Check if the number is even
            if (num % 2 == 0) {
                System.out.println(num + " is an even number.");
            } else {
                System.out.println(num + " is not an even number.");
            }
        }

        // Close the scanner object
        scanner.close();
    }
}
