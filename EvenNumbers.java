public class EvenNumbers {
    public static void main(String[] args) {
        int start = 1, end = 20; // Define the range

        System.out.println("Even numbers between " + start + " and " + end + " are:");
        for (int i = start; i <= end; i++) {
            if (i % 2 == 0) { // Check if the number is even
                System.out.print(i + " ");
            }
        }
    }
}
