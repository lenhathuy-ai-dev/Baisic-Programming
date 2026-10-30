import java.util.Scanner;

public class Bai5_HinhTron {
     public void main()
    {
        Scanner sc = new Scanner(System.in);
        System.out.print("Nhập giá trị bán kính: ");
        float r = sc.nextFloat();

        System.out.printf("Chu vi hình tròn %.3f\n", 2*Math.PI*r);
        System.out.printf("Diện tích hình tròn %.3f\n", Math.PI*r*r);

    }
    
}
